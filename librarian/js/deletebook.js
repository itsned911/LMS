const $deleteBtn = $('.deleteBtn');

$deleteBtn.on('click', function() {
  let isbn = $(this).parent().parent().parent().children('td:first-child').text();
  delete_user(isbn);
});

function delete_user(isbn) {
  // console.log(isbn);
  $.ajax({
    type: 'post',
    url: 'deletebook.php',
    data: {
      isbn: isbn
    },
    success: function(response) {
      if (response == 'deleted') {
        window.location.reload();
      } else {
        alert('Can\'t delete');
      }
    }
  });
}
