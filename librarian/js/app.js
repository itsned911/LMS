const $deleteBtn = $('.deleteBtn');

$deleteBtn.on('click', function() {
  let user_id = $(this).parent().parent().parent().children('td:first-child').text();
  delete_user(user_id);
});

function delete_user(user_id) {
  // console.log(user_id);
  $.ajax({
    type: 'post',
    url: 'deleteuser.php',
    data: {
      user_id: user_id
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
