// var app = new Vue({
//   el: '#app',
//   data: {
//     scanner: null,
//     activeCameraId: null,
//     cameras: [],
//     scans: []
//   },
//   mounted: function () {
//     var self = this;
//     self.scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5 });
//     self.scanner.addListener('scan', function (content, image) {
//       // self.scans.unshift({ date: +(Date.now()), content: content });
//       $('#listqr').append('<li>'+content+'</li>');
//     });
//     Instascan.Camera.getCameras().then(function (cameras) {
//       self.cameras = cameras;
//       if (cameras.length > 0) {
//         self.activeCameraId = cameras[0].id;
//         self.scanner.start(cameras[0]);
//       } else {
//         console.error('No cameras found.');
//       }
//     }).catch(function (e) {
//       console.error(e);
//     });
//   },
//   methods: {
//     formatName: function (name) {
//       return name || '(unknown)';
//     },
//     selectCamera: function (camera) {
//       this.activeCameraId = camera.id;
//       this.scanner.start(camera);
//     }
//   }
// });

let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });

scanner.addListener('scan', function (content) {
  $('#listqr').append('<li>'+content+'</li>');

    $.ajax({
        url: '../public/qrcodes/decodeqr',
        data: $('#userloginform').serialize(),
        type: 'POST',
        dataType: 'json',
        success: function(data){
          window.localStorage["datalogin"] = JSON.stringify(data);
        }
    });

});

Instascan.Camera.getCameras().then(function (cameras) {
  // alert(JSON.stringify(cameras));
  if (cameras.length > 0) {
    scanner.start(cameras[0]);
  } else {
    console.error('No cameras found.');
  }
}).catch(function (e) {
  console.error(e);
});
