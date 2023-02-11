$("#scrollToRight").click(function (event) {
  event.preventDefault()
  $("#curriculamContent").animate(
    {
      scrollLeft: "+=300px",
    },
    "slow"
  )
})

$("#scrollToLeft").click(function (event) {
  event.preventDefault()
  $("#curriculamContent").animate(
    {
      scrollLeft: "-=300px",
    },
    "slow"
  )
})

