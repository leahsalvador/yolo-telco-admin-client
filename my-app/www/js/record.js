$(document).ready(function() {
  var capture = {
    image: function() {
      navigator.device.capture.captureImage(capture.onCaptureImageSuccess);
    },
    video: function() {
      navigator.device.capture.captureVideo(capture.onCaptureVideoSuccess);
    },
    onCaptureImageSuccess: function(mediaFiles) {
      for (var i = 0; i < mediaFiles.length; i++) {
        var path = mediaFiles[i].fullPath;
        $("#Curl").html(path);
        $("#photo").attr("src", path);
        $("#image_file").val(path);
      }
    },
    onCaptureVideoSuccess: function(mediaFiles) {
      for (var i = 0; i < mediaFiles.length; i++) {
        var path = mediaFiles[i].fullPath;
        $("#Vurl").html(path);
        $("#video_file").val(path);
        $("#send_to").modal("show");
      }
    }
  };

  $("#getImg").click(function() {
    capture.image();
  });

  $(document).on("click", ".record", function() {
    if ($("#users_list").val() == $(this).attr("id")) {
      $("#send_to").modal("show");
    } else {
      $("#users_list").val($(this).attr("id"));
      $("#site_task_id").val($(this).attr("site_task_id"));
      capture.video();
    }
  });

  // $('#sends').click(function(){
  $(document).on("click", "#send_image", function(e) {
    e.preventDefault();
    var fileURL = $("#image_file").val();
    var options = new FileUploadOptions();
    options.fileKey = "file";
    options.fileName = fileURL.substr(fileURL.lastIndexOf("/") + 1);
    options.mimeType = "image/jpeg";

    var ft = new FileTransfer();
    // ft.upload(fileURL, encodeURI("http://192.168.1.9/telco/Authentication/upload_video"));
    ft.upload(
      fileURL,
      "http://192.168.1.9/telco/authentication/upload_video",
      function(result) {
        alert("Upload success: " + result.responseCode);
        alert(result.bytesSent + " bytes sent");
      },
      function(error) {
        alert("Error uploading file " + path + ": " + error.code);
      },
      options
    );

    // alert(fileURL);
    // alert();
  });

  $(document).on("click", "#send_video", function(e) {
    e.preventDefault();
    var fileURL = $("#video_file")
      .val()
      .replace(/\\/g, "/");
    var user = $("#users_list").val();
    var site_task_id = $("#site_task_id").val();
    var video_name = $("#video_name").val();
    var options = new FileUploadOptions();
    options.fileKey = "file";
    options.fileName = fileURL.substr(fileURL.lastIndexOf("/") + 1);
    options.mimeType = "video/mp4";
    // alert(fileURL);
    if (video_name == "") {
      swal("Empty!", "Please Provide Video Title", "error").then(function() {
        return;
      });
    }
    if (user == "") {
      swal("Empty!", "Please Select User", "error").then(function() {
        return;
      });
    }
    if (fileURL == "") {
      swal("Empty!", "Please Record Video", "error").then(function() {
        return;
      });
    }
    if (fileURL != "" && video_name != "" && user != "") {
      var ft = new FileTransfer();
      // ft.upload(fileURL, encodeURI("http://192.168.1.9/telco/Authentication/upload_video"));
      ft.upload(
        fileURL,
        "http://192.168.1.9/telco/authentication/upload_video",
        function(result) {
          // alert('Upload success: ' + result.responseCode);
          // alert(result.bytesSent + ' bytes sent');
          // location.reload();
          $.ajax({
            url: "http://192.168.1.9/telco/authentication/save_video",
            // url: "http://192.168.1.9/telco/Authentication/save_video",
            method: "POST",
            data: {
              file_name: options.fileName,
              video_name: video_name,
              users: user,
              site_task_id: site_task_id
            },
            success: function(data) {
              swal("Success", "Video has sent successfully", "success").then(
                function() {
                  location.reload();
                }
              );
            }
          });
        },
        function(error) {
          alert("Error uploading file " + path + ": " + error.code);
        },
        options
      );

      var statusDom;

      statusDom = document.querySelector("#send_video");

      ft.onprogress = function(progressEvent) {
        if (progressEvent.lengthComputable) {
          var perc = Math.floor(
            (progressEvent.loaded / progressEvent.total) * 101
          );
          statusDom.innerHTML = perc + "%";
          console.log(perc);
        } else {
          if (statusDom.innerHTML == "") {
            statusDom.innerHTML = "Loading";
          } else {
            statusDom.innerHTML += ".";
          }
        }
      };
    }
  });

  $(document).on("click", ".delete_video", function(e) {
    e.preventDefault();
    swal({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#d33",
      cancelButtonColor: "#3085d6",
      confirmButtonText: "Yes, delete it!"
    }).then(result => {
      if (result.value) {
        $.post(
          "http://192.168.1.9/telco/authentication/delete_video",
          { video_id: $(this).attr("video_id") },
          function(data) {
            swal("Deleted!", "Video has been deleted.", "success").then(
              function(data) {
                location.reload();
              }
            );
          }
        );
      }
    });
  });

  $(document).on("click", ".resend_video", function(e) {
    e.preventDefault();
    swal({
      title: "Are you sure?",
      text: "Do you want to resend?",
      type: "info",
      showCancelButton: true,
      confirmButtonColor: "#d33",
      cancelButtonColor: "#3085d6",
      confirmButtonText: "Yes!"
    }).then(result => {
      if (result.value) {
        $.post(
          "http://192.168.1.9/telco/authentication/resend_video",
          { video_id: $(this).attr("video_id") },
          function(data) {
            swal("Success!", "Video has been resend.", "success").then(function(
              data
            ) {
              location.reload();
            });
          }
        );
      }
    });
  });
  send_choose_on_progress = false;
  $(document).on("click", "#send_c", function(e) {
    e.preventDefault();
    if(send_choose_on_progress){
      return;
    }
    let extension = $("#choose_vid")
      .val()
      .split(".")
      .pop()
      .toLowerCase();
    let title = $("#video_title").val();
    let user = $("#user_list1").val();
    let site_task_id = $("#site_task_id1").val();
    // var site_task_id = $('#site_task_id1').val();
    if (title == "") {
      swal("Empty!", "Please Provide Video Title", "error").then(function() {
        return;
      });
    }
    if (user == "") {
      swal("Empty!", "Please Select User", "error").then(function() {
        return;
      });
    }
    //'gif','png','jpg','jpeg',
    if (extension !== "") {
      if (jQuery.inArray(extension, ["mp4", "3gp"]) == -1) {
        alert("Invalid Image File");
        $("#image").val("");
        return false;
      }
    }
    if (title != "" && user != "") {
      var form_data = new FormData();
      var files = $("#choose_vid")[0].files[0];
      form_data.append("file_name", files);
      form_data.append("video_name", title);
      form_data.append("users", user);
      form_data.append("site_task_id", site_task_id);

      send_choose_on_progress = true;
      $('#send_c').attr('disabled', '');
      $.ajax({
        url: "http://34.74.113.124/telco/authentication/send_choose",
        method: "POST",
        data: form_data,
        contentType: false,
        processData: false,
        beforeSend: function() {
          $("#choose_loading").html("<p>Uploading Please Wait ...</p>");
        },
        success: function(data) {
          $("#choose_loading").html("");
          send_choose_on_progress = false;
          $('#send_c').removeAttr('disabled');
          swal("Success", "Video has sent successfully", "success").then(
            function() {
              $("#send_to_choose").modal("hide");
              location.reload();
            }
          );
        },
        error: function(data){
          send_choose_on_progress = false;
          $('#send_c').removeAttr('disabled');
        }
      });
    }
  });
});
