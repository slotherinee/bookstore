<footer class="container mx-auto p-4 flex justify-center">
    <p>&copy; <?= date("Y") ?> Bookstore. All Rights Reserved.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

<script>
$(document).ready(() => {
  $('#mobile-menu-button').click(() => {
    $('#mobile-menu').toggleClass('hidden')
    $('#mobile-menu').toggleClass('active')
  })

  $(window).resize(() => {
    if ($('#mobile-menu').hasClass('active')) {
      $('#mobile-menu').removeClass('active')
      $('#mobile-menu').addClass('hidden')
    }
  })
})
</script>
