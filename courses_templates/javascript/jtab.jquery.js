/*!
 * jTab is “Displays content in tabs for jQuery framework”.
 *
 * @author demorfi <demorfi@gmail.com>
 * @version 1.0
 * @source https://github.com/demorfi/jtab
 * @license http://opensource.org/licenses/MIT Licensed under MIT License
 */
(function ($)
{

    /**
     * Initialize.
     *
     * @param {object} [options] Available options
     * @param {number} [options.start] Start init tab
     * @param {boolean|object} [options.params] Additional data to be ajax sent
     * @param {boolean} [options.trackingHash] Tracking browser url - hash
     * @param {object} [options.callback] Callback functions
     * @param {function} [options.callback.init] Callback init tab
     * @param {function} [options.callback.trigger] Callback trigger callback function
     * @param {function} [options.callback.change] Callback change tab
     * @param {function} [options.callback.select] Callback select tab
     * @param {function} [options.callback.content] Callback loading content in tab
     * @param {function} [options.callback.hash] Callback change browser url - hash
     * @param {object} [options.animate] Animate change tab effect
     * @param {function} [options.animate.open] Animate effect open tab
     * @param {function} [options.animate.close] Animate effect close tab
     * @param {object} [options.class] Used css class list
     * @param {string} [options.class.wrapper] Use class for element jtab-wrapper
     * @param {string} [options.class.navigList] Use class for element jtab-navig-list
     * @param {string} [options.class.selected] Use class for element jtab-selected
     * @param {string} [options.class.content] Use class for element jtab-content
     * @param {string} [options.class.loading] Use class for element jtab-loading
     * @return {object} jtab
     */
    $.fn.jtab = function (options)
    {
        var obj = new $__construct(this, options);
        obj.init();
        return (obj);
    };

    /**
     * Constructor application.
     * Merge default setting.
     *
     * @param {object} el <ul> html element
     * @param {object} [options] Available options
     * @param {number} [options.start] Start init tab
     * @param {boolean|object} [options.params] Additional data to be ajax sent
     * @param {boolean} [options.trackingHash] Tracking browser url - hash
     * @param {object} [options.callback] Callback functions
     * @param {function} [options.callback.init] Callback init tab
     * @param {function} [options.callback.trigger] Callback trigger callback function
     * @param {function} [options.callback.change] Callback change tab
     * @param {function} [options.callback.select] Callback select tab
     * @param {function} [options.callback.content] Callback loading content in tab
     * @param {function} [options.callback.hash] Callback change browser url - hash
     * @param {object} [options.animate] Animate change tab effect
     * @param {boolean|function} [options.animate.open] Animate effect open tab
     * @param {boolean|function} [options.animate.close] Animate effect close tab
     * @param {object} [options.class] Used css class list
     * @param {string} [options.class.wrapper] Use class for element jtab-wrapper
     * @param {string} [options.class.selected] Use class for element jtab-selected
     * @param {string} [options.class.content] Use class for element jtab-content
     * @param {string} [options.class.loading] Use class for element jtab-loading
     * @private
     * @constructor
     * @return {object} this
     */
    var $__construct = function (el, options)
    {
        this.version = 1.0;
        this.options = $.extend(true, {
            'start'       : 1,
            'params'      : false,
            'trackingHash': true,
            'callback'    : {
                'init'   : $.noop,
                'trigger': $.noop,

                /**
                 * Callback change tab.
                 *
                 * @param {object} data Callback data
                 * @param {object} data.self jQuery current element
                 * @param {object} data.parent jQuery parent element
                 * @param {string} data.id Tab id
                 * @return {void}
                 */
                'change': function (data)
                {
                    this.closeAllTab(data.parent, true).openTabId(data.id, true);
                    this.getCallback('trigger').call(this, data, 'change');
                },

                /**
                 * Callback select tab.
                 *
                 * @param {object} data Callback data
                 * @param {object} data.parent jQuery parent element
                 * @param {object} event Dom event
                 * @return {void}
                 */
                'select': function (data, event)
                {
                    if (!$(event.currentTarget).hasClass(this.getClass('selected'))) {
                        this.toggleTab(this.getTabId(event.currentTarget));
                        this.getCallback('trigger').call(this, data, 'select');
                    }
                    return (false);
                },

                /**
                 * Callback loading content in tab.
                 *
                 * @param {object} data Callback data
                 * @param {object} data.self jQuery current element
                 * @param {object} data.ref Address loading of content
                 * @param {string} data.id Tab id
                 * @return {void}
                 */
                'content': function (data)
                {
                    if ($(data.self).data('loaded') === undefined) {
                        $(data.self).data('content', $(data.self).html()).empty().addClass(this.getClass('loading'))
                            .load(data.ref, this.getOption('params'), $.proxy(function (data, content, textStatus)
                            {
                                (textStatus === 'error' && $(data.self).html($(data.self).data('content')));
                                $(data.self).removeClass(this.getClass('loading')).data('loaded', true);
                                this.getCallback('trigger').call(this, data, 'loaded');
                            }, this, data));
                    }

                    this.getCallback('trigger').call(this, data, 'content');
                    this.hasAnimate('open') ? this.getAnimate('open').call(this, data.self) : data.self.show();
                },

                /**
                 * Callback change browser url - hash.
                 *
                 * @param {object} data Callback data
                 * @param {string} data.id Tab id
                 * @return {void}
                 */
                'hash': function (data)
                {
                    $('[href="' + this.getTabIdHref(data.id) + '"]').trigger('click.jtab');
                }
            },
            'animate'     : {
                'open' : false,
                'close': false
            },
            'class'       : {
                'wrapper' : 'jtab-wrapper',
                'selected': 'jtab-selected',
                'content' : 'jtab-content',
                'loading' : 'jtab-loading'
            }
        }, options);

        this.$el = $(el);
        return (this);
    };

    /**
     * Constructor application prototype.
     *
     * @private
     * @constructor
     */
    $__construct.prototype = {

        /**
         * Initialize in prototype.
         *
         * @return {void}
         */
        init: function ()
        {
            var $self = this;
            $.each(this.$el, function ()
            {
                // wrapper <ul> list
                $(this).data('jtabObject', $self).wrap($('<div>').addClass($self.getClass('wrapper'))).show();

                // selected first show tab or options start index
                var selected = $(this).find('a' + $self.getClass('selected', true)).length
                    ? $(this).find('a' + $self.getClass('selected', true))
                    : $(this).find('a:eq(' + ($self.getOption('start') - 1) + ')');

                // close all tab
                $self.closeAllTab(this, false, true);

                // show tab -> selected
                $self.openTabId($self.getTabId(selected.data('jtabCurrent', true)));

                // count tab list in <ul> element
                $(this).data('jtabCount', $(this).find('a').size());

                // select callback
                $(this).find('a').on('click.jtab', $.proxy($self.getCallback('select'), $self, {
                    'parent': this
                }));

                $self.getCallback('init').call($self, {
                    'self': this
                });
            });

            // tracking browser hash tag
            this.getOption('trackingHash') && this.triggerTracking();
        },

        /**
         * Tracking browser hash tag.
         *
         * @return {void}
         */
        triggerTracking: function ()
        {
            $(window).on('hashchange', $.proxy(function ()
            {
                var id = location.hash.replace(/^#!/, '#');

                // change hash callback
                if (this.$el.find('[href="' + this.getTabIdHref(id) + '"]').length) {
                    this.getCallback('hash').call(this, {
                        'id': id
                    });
                }
            }, this));

            if (location.hash.length) {
                $(window).trigger('hashchange');
            }
        },

        /**
         * Get class name.
         *
         * @param {string} name Class id
         * @param {boolean} [selector] Use css selector
         * @return {string} css class
         */
        getClass: function (name, selector)
        {
            return ((selector ? '.' : '') + this.options['class'][name]);
        },

        /**
         * Get callback function.
         *
         * @param {string} name Callback id
         * @return {function}
         */
        getCallback: function (name)
        {
            return ($.isFunction(this.options.callback[name]) ? this.options.callback[name] : $.noop);
        },

        /**
         * Get option value.
         *
         * @param {string} name Option id
         * @return {*}
         */
        getOption: function (name)
        {
            return (this.options[name]);
        },

        /**
         * Change option.
         *
         * @param {string} name Option id
         * @param {*} value Option value
         * @return {void}
         */
        setOption: function (name, value)
        {
            this.options[name] = value;
        },

        /**
         * Get app version.
         *
         * @return {number}
         */
        getVersion: function ()
        {
            return (this.version);
        },

        /**
         * Get animate function.
         *
         * @param {string} name Animate id
         * @return {function}
         */
        getAnimate: function (name)
        {
            return ($.isFunction(this.options.animate[name]) ? this.options.animate[name] : $.noop);
        },

        /**
         * Has animate function.
         *
         * @param {string} name Animate id
         * @return {boolean}
         */
        hasAnimate: function (name)
        {
            return ($.isFunction(this.options.animate[name]));
        },

        /**
         * Toggle active tab.
         *
         * @param {string} id Tab id
         * @return {void}
         */
        toggleTab: function (id)
        {
            var active = $(this.getClass('wrapper', true)).find('[href="' + this.getTabIdHref(id) + '"]');
            this.getCallback('change').call(this, {
                'self'  : $(id),
                'parent': active.closest(this.getClass('wrapper', true)).children('ul'),
                'id'    : id
            });
        },

        /**
         * Open tab.
         *
         * @param {string} id Tab id
         * @param {boolean} [animate] Uses animation
         * @param {boolean} [forceOpen] Force open tab
         * @return {boolean}
         */
        openTabId: function (id, animate, forceOpen)
        {
            var $self = $(id);

            // you can not open two times
            if ($self.hasClass(this.getClass('selected')) && !forceOpen) {
                return (false);
            }

            // current tab
            var ref = $('[href="' + this.getTabIdHref(id) + '"]')
                .addClass(this.getClass('selected')).data('jtabCurrent', true).data('content');

            if (!$.isEmptyObject($self)) {
				location.hash = id.replace(/^#/, '#!');

                $self.addClass(this.getClass('selected'));
                this.getCallback('trigger').call(this, $self, 'open');

                // not loading - show tab
                if (ref === undefined || !ref.length) {
                    return (animate && this.hasAnimate('open')
                        ? this.getAnimate('open').call(this, $self) : $self.show());
                }

                this.getCallback('content').call(this, {
                    'self': $self,
                    'ref' : ref,
                    'id'  : id
                });
            }

            return (true);
        },

        /**
         * Close tab.
         *
         * @param {string} id Tab id
         * @param {boolean} [animate] Uses animation
         * @param {boolean} forceClose Force close tab
         * @return {boolean}
         */
        closeTabId: function (id, animate, forceClose)
        {
            var $self = $(id);

            // you can not close two times
            if (!$self.hasClass(this.getClass('selected')) && !forceClose) {
                return (false);
            }

            // current tab
            $('[href="' + this.getTabIdHref(id) + '"]')
                .removeClass(this.getClass('selected')).removeData('jtabCurrent');

            if (!$.isEmptyObject($self)) {
                $self.removeClass(this.getClass('selected'));
                this.getCallback('trigger').call(this, $self, 'close');

                if (!$self.hasClass(this.getClass('content'))) {
                    $self.addClass(this.getClass('content'));
                }

                // close tab
                return (animate && this.hasAnimate('close')
                    ? this.getAnimate('close').call(this, $self) : $self.hide());
            }

            return (true);
        },

        /**
         * Close all tab.
         *
         * @param {object} el jQuery <ul> element
         * @param {boolean} [animate] Uses animation
         * @param {boolean} [forceClose]
         * @return {object} this
         */
        closeAllTab: function (el, animate, forceClose)
        {
            var $self = this;
            $(el).find('a').each(function ()
            {
                $self.closeTabId($self.getTabId(this), animate, forceClose);
            });

            return (this);
        },

        /**
         * Get id tab of the given itemid.
         *
         * @param {object} el jQuery <ul> element
         * @return {string}
         */
        getTabId: function (el)
        {
            return ($(el).attr('itemid') ? $(el).attr('itemid') : $(el).attr('href'));
        },

        /**
         * Get link address tab of the given itemid.
         *
         * @param {string} id Item id tab
         * @return {string}
         */
        getTabIdHref: function (id)
        {
            var itemId = $('[itemid="' + id + '"]');
            return (itemId.length ? itemId.attr('href') : id);
        }
    };

    /**
     * An anonymous call to the class .jtab-trigger.
     */
    $(function ()
    {
        $('.jtab-trigger').jtab();
    });
})(jQuery);
