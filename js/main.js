jQuery(document).ready(function ($) {
  let $window = $(window),
    $body = $("body"),
    $html = $("html"),
    $htHeader = $("header.header").height();

  let scrollIndicator = function (topOffset, bottomOffset) {
    topOffset = typeof topOffset === "undefined" ? 0 : topOffset;
    bottomOffset = typeof bottomOffset === "undefined" ? 0 : bottomOffset;

    let lastPosition = false,
      scrollAmount = 0,
      totalScrollAmount = 0;

    $window.on("load scroll resize", function () {
      totalScrollAmount = $(document).height() - $window.height();
      scrollAmount = $window.scrollTop();
      $body.removeClass("scroll-no-direction");

      if (scrollAmount > lastPosition && lastPosition >= 0) {
        // scroll down
        $body.removeClass("scroll-no-direction");
        $body.removeClass("scroll-up");
        $body.addClass("scroll-down");
      } else if (scrollAmount < lastPosition && lastPosition >= 0) {
        // scroll up
        $body.removeClass("scroll-no-direction");
        $body.addClass("scroll-up");
        $body.removeClass("scroll-down");
      } else if (lastPosition < 0) {
        // elastic scroll on MAC, mobile devices
        $body.addClass("scroll-no-direction");
        $body.removeClass("scroll-down");
        $body.removeClass("scroll-up");
      }

      lastPosition = scrollAmount;

      if (scrollAmount > topOffset) {
        $body.removeClass("scroll-top");
        $body.addClass("scroll-middle");
      } else {
        $body.addClass("scroll-top");
        $body.removeClass("scroll-middle");
      }

      if (scrollAmount >= totalScrollAmount - bottomOffset) {
        $body.addClass("scroll-bottom");
      } else {
        $body.removeClass("scroll-bottom");
      }
    });
    $window.on("load", function () {
      $body.removeClass("scroll-up");
      $body.addClass("scroll-no-direction");
    });
  };

  let scrollParallax = function () {
    $("[data-scroll]").each(function () {
      let $this = $(this),
        thisHeight = parseFloat($this.height()),
        scrollType = $this.attr("data-scroll"),
        isBackgroundScroll =
          scrollType === "background" || scrollType === "background-middle",
        speed = this.hasAttribute("data-scroll-speed"),
        direction = this.hasAttribute("data-scroll-direction"),
        noRepeat = this.hasAttribute("data-scroll-no-repeat"),
        isDev = this.hasAttribute("data-scroll-dev"),
        isSticky = this.hasAttribute("data-scroll-sticky"),
        inView = false;

      // restrict speed to small number
      speed = speed ? parseFloat($this.attr("data-scroll-speed")) / 10 : 0.2;

      // default direction
      direction = direction ? $this.attr("data-scroll-direction") : "vertical";

      // check repeat
      if (noRepeat && !isSticky) {
        isSticky = true;
        $this.attr("data-scroll-sticky", "");
      }

      function run() {
        let offsetTop = $this.offset().top,
          scrollAmount = $window.scrollTop(),
          idealOffsetTop = offsetTop + thisHeight / 2, // distance from window = 0 to middle of element
          idealWindowOffset =
            idealOffsetTop -
            ($window.height() - thisHeight) / 2 -
            thisHeight / 2, // element is in middle of view
          backgroundImageOffset = isBackgroundScroll
            ? (($window.height() - thisHeight) / 2) * speed
            : 0,
          backgroundMiddleOffset =
            scrollType === "background-middle" ? (thisHeight / 2) * -1 : 0,
          gapDistance = scrollAmount - idealWindowOffset,
          transformDistance =
            gapDistance * speed -
            backgroundImageOffset +
            backgroundMiddleOffset;

        // check sticky
        if (isSticky) {
          if (speed > 0) {
            // stick bottom
            transformDistance = transformDistance > 0 ? 0 : transformDistance;
          } else {
            // stick top
            transformDistance = transformDistance < 0 ? 0 : transformDistance;
          }
        }

        // check repeat
        if (noRepeat && isSticky) {
          if (inView && transformDistance !== 0) {
            transformDistance = 0;
          } else if (transformDistance === 0) {
            inView = true;
            $this.addClass("data-scroll-no-repeat");
          }
        }

        // scroll type
        if (isBackgroundScroll) {
          // background parallax
          if (direction === "vertical") {
            $this.css(
              "background-position",
              "center " + transformDistance + "px"
            );
          } else {
            $this.css("background-position", transformDistance + "px center");
          }
        } else {
          // transform parallax
          if (direction === "vertical") {
            $this.css("transform", "translateY(" + transformDistance + "px)");
          } else {
            $this.css("transform", "translateX(" + transformDistance + "px)");
          }
        }
      }

      $window.on("load resize scroll", function () {
        run();
      });

      run();
    });
  };

  let scheduleTab = function () {
    let getHt = function () {
      setTimeout(() => {
        $(".schedule-container").css(
          "height",
          $(".schedule-content.active").height()
        );
      }, 300);
    };

    getHt();

    $window.resize(function () {
      getHt();
    });

    $(".schedule a").on("click", function (event) {
      event.preventDefault();

      let $this = $(this),
        sched = $this.data("sched");

      $(".schedule a").removeClass("active");
      $this.addClass("active");
      $(".schedule-content").removeClass("active");

      $('.schedule-content[data-day="' + sched + '"]').addClass("active");
    });
  };

  /**
   * Init Functions
   */

  let loadFunctions = function () {
    $window.on("load", function () {
      $body.addClass("loaded");
    });

    scrollIndicator($htHeader);

    scheduleTab();

    $window.on("load resize", function () {
      if ($window.width() > 1200) {
        scrollParallax();
      }
    });

    SmoothScroll({
      animationTime: 1270, // [ms]
      stepSize: 70, // [px]
    });
  };

  window.addEventListener(
    "load",
    function () {
      var forms = document.getElementsByClassName("needs-validation");
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener(
          "submit",
          function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add("was-validated");
          },
          false
        );
      });
    },
    false
  );

  loadFunctions();
});
