(function () {
  // Inisialisasi semua toast yang ada di halaman
  var toastElList = [].slice.call(document.querySelectorAll(".toast"));
  var toastList = toastElList.map(function (toastEl) {
    return new bootstrap.Toast(toastEl);
  });

  // Fungsi untuk menampilkan semua toast yang ada di halaman
  toastList.forEach(function (toast) {
    toast.show();
  });

  // Menyembunyikan event listener untuk tombol toast karena kita tidak membutuhkannya lagi
  // const toastTrigger = document.getElementById("liveToastBtn1");
  // const toastLiveExample = document.getElementById("liveToast1");
  // if (toastTrigger) {
  //   toastTrigger.addEventListener("click", () => {
  //     const toast = new bootstrap.Toast(toastLiveExample);
  //     toast.show();
  //   });
  // }

  // const toastTrigger2 = document.getElementById("liveToastBtn2");
  // const toastLiveExample2 = document.getElementById("liveToast2");
  // if (toastTrigger2) {
  //   toastTrigger2.addEventListener("click", () => {
  //     const toast = new bootstrap.Toast(toastLiveExample2);
  //     toast.show();
  //   });
  // }

  // const toastTrigger3 = document.getElementById("liveToastBtn3");
  // const toastLiveExample3 = document.getElementById("liveToast3");
  // if (toastTrigger3) {
  //   toastTrigger3.addEventListener("click", () => {
  //     const toast = new bootstrap.Toast(toastLiveExample3);
  //     toast.show();
  //   });
  // }

  // const toastTrigger4 = document.getElementById("liveToastBtn4");
  // const toastLiveExample4 = document.getElementById("liveToast4");
  // if (toastTrigger4) {
  //   toastTrigger4.addEventListener("click", () => {
  //     const toast = new bootstrap.Toast(toastLiveExample4);
  //     toast.show();
  //   });
  // }

  // const toastTrigger5 = document.getElementById("liveToastBtn5");
  // const toastLiveExample5 = document.getElementById("liveToast5");
  // if (toastTrigger5) {
  //   toastTrigger5.addEventListener("click", () => {
  //     const toast = new bootstrap.Toast(toastLiveExample5);
  //     toast.show();
  //   });
  // }

  // const toastTrigger6 = document.getElementById("liveToastBtn6");
  // const toastLiveExample6 = document.getElementById("liveToast6");
  // if (toastTrigger6) {
  //   toastTrigger6.addEventListener("click", () => {
  //     const toast = new bootstrap.Toast(toastLiveExample6);
  //     toast.show();
  //   });
  // }

  !(function () {
    "use strict";
    var a, d, f, b, c, g, e;
    document.querySelectorAll(".tooltip-demo").forEach(function (a) {
      new bootstrap.Tooltip(a, {
        selector: '[data-bs-toggle="tooltip"]',
      });
    }),
      document.querySelectorAll('[data-bs-toggle="popover"]').forEach(function (a) {
        new bootstrap.Popover(a);
      }),
      (a = document.getElementById("toastPlacement")),
      a &&
        document.getElementById("selectToastPlacement").addEventListener("change", function () {
          a.dataset.originalClass || (a.dataset.originalClass = a.className), (a.className = a.dataset.originalClass + " " + this.value);
        }),
      document.querySelectorAll(".bd-example .toast").forEach(function (a) {
        var b = new bootstrap.Toast(a, {
          autohide: !1,
        });
        b.show();
      }),
      (d = document.getElementById("liveToastBtn")),
      (f = document.getElementById("liveToast")),
      d &&
        d.addEventListener("click", function () {
          var a = new bootstrap.Toast(f);
          a.show();
        }),
      document.querySelectorAll(".tooltip-test").forEach(function (a) {
        new bootstrap.Tooltip(a);
      }),
      document.querySelectorAll(".popover-test").forEach(function (a) {
        new bootstrap.Popover(a);
      }),
      document.querySelectorAll('.bd-example-indeterminate [type="checkbox"]').forEach(function (a) {
        a.indeterminate = !0;
      }),
      document.querySelectorAll('.bd-content [href="#"]').forEach(function (a) {
        a.addEventListener("click", function (a) {
          a.preventDefault();
        });
      }),
      (b = document.getElementById("exampleModal")),
      b &&
        b.addEventListener("show.bs.modal", function (c) {
          var d = c.relatedTarget,
            a = d.getAttribute("data-bs-whatever"),
            e = b.querySelector(".modal-title"),
            f = b.querySelector(".modal-body input");
          (e.textContent = "New message to " + a), (f.value = a);
        }),
      (c = document.getElementById("btnToggleAnimatedProgress")),
      c &&
        c.addEventListener("click", function () {
          c.parentNode.querySelector(".progress-bar-striped").classList.toggle("progress-bar-animated");
        }),
      (g = '<div class="bd-clipboard"><button type="button" class="btn-clipboard" title="Copy to clipboard">Copy</button></div>'),
      document.querySelectorAll("div.highlight").forEach(function (a) {
        a.insertAdjacentHTML("beforebegin", g);
      }),
      document.querySelectorAll(".btn-clipboard").forEach(function (a) {
        var b = new bootstrap.Tooltip(a);
        a.addEventListener("mouseleave", function () {
          b.hide();
        });
      });
  })();
})();
