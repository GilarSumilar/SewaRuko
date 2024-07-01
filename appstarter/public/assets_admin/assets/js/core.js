var doBanned = function (data) {
  var nameDelete = "";

  if (data.name) {
    nameDelete = data.name;
  }

  swal({
    title: `Apakah anda yakin ingin BANNED ${nameDelete}?`,
    text: "Aksi ini melakukan BANNED pada user!",
    type: "warning",
    buttons: {
      confirm: {
        text: "Ya, BANNED!",
        className: "btn btn-danger",
      },
      cancel: {
        visible: true,
        text: "Tidak",
        className: "btn btn-secondary",
      },
    },
  }).then((Banned) => {
    if (Banned) {
      $.ajax({
        url: data.url,
        type: "DELETE",
        data: {
          id: data.id,
        },
        success: function (res) {
          swal({
            title: "TERBANNED!",
            text: res.message,
            type: "success",
            buttons: {
              confirm: {
                className: "btn btn-success refresh-page",
              },
            },
          });
        },
      });
    } else {
      swal.close();
    }
  });
};

var doUpdate = function (data) {
  var nameUpdate = "";

  if (data.name) {
    nameUpdate = data.name;
  }

  swal({
    title: `Apakah anda yakin ingin mengubah ${nameDelete}?`,
    text: "Aksi ini tidak bisa mengembalikan data yang terhapus!",
    type: "warning",
    buttons: {
      confirm: {
        text: "Ya, ubah!",
        className: "btn btn-secondary",
      },
      cancel: {
        visible: true,
        text: "Tidak",
        className: "btn btn-danger",
      },
    },
  }).then((Update) => {
    if (Update) {
      $.ajax({
        url: data.url,
        type: "PUT",
        data: {
          id: data.id,
        },
        success: function (res) {
          swal({
            title: "Terubah!",
            text: res.message,
            type: "success",
            buttons: {
              confirm: {
                className: "btn btn-success refresh-page",
              },
            },
          });
        },
      });
    } else {
      swal.close();
    }
  });
};

$(document).on("click", ".refresh-page", function () {
  location.reload();
});
