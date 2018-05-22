  AOS.init();

  window.addEventListener('load', function() {
    window.cookieconsent.initialise({
      'palette': {
        'popup': {
          'background': '#e0552a'
        },
        'button': {
          'background': '#161b1e'
        }
      },
      'position': 'bottom-right',
      'theme': 'edgeless',
      'type': 'opt-in',
      'content': {
        'dismiss': 'Disallow Cookies',
        'allow': 'Allow Cookies',
        'href': 'https://www.xxxx.co.uk/cookies/'
      },

      onInitialise: function(status) {
        var type = this.options.type;
        var didConsent = this.hasConsented();
        if (type == 'opt-in' && didConsent) {
          // enable cookies
        }
        if (type == 'opt-out' && !didConsent) {
          // disable cookies
        }
      },

      onStatusChange: function(status, chosenBefore) {
        var type = this.options.type;
        var didConsent = this.hasConsented();
        if (type == 'opt-in' && didConsent) {
          // enable cookies
        }
        if (type == 'opt-out' && !didConsent) {
          // disable cookies
        }
      },

      onRevokeChoice: function() {
        var type = this.options.type;
        if (type == 'opt-in') {
          // disable cookies
        }
        if (type == 'opt-out') {
          // enable cookies
        }
      },
    })
  });

  // skip-to-main
  $(document).ready(function() {
    $('.skip').click(function(event) {
      var skipTo = '#' + this.href.split('#')[1];
      $(skipTo).attr('tabindex', -1).on('blur focusout', function() {
        $(this).removeAttr('tabindex');
      }).focus();
    });
  });


  // slick carousel
  $('.carousel').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 6000,
    arrows: false,
    dots: false,
    infinite: true,
    speed: 1000,
    fade: true,
    cssEase: 'linear'
  });

  /*-- Open all external links in a new window --*/
  jQuery(document).ready(function($) {
    $('a')
      .filter('[href^="http"], [href^="//"]')
      .not('[href*="' + window.location.host + '"]')
      .attr('rel', 'nofollow noopener noreferrer')
      .not('.trusted')
      .attr('target', '_blank');
  });

  /*-- jQuery Mask --*/
  $(document).ready(function() {
    $('.landline').mask('00000 000000');
    $('.mobile').mask('00000000000');
  });

  /*-- Page Transition --*/
  $(function() {
    $('a').each(function() {
      if (location.hostname === this.hostname || !this.hostname.length) {
        var link = $(this).attr("href");
        if (link.match("^#")) {
          $(this).click(function() {
            var target = $(link);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top - 70
              }, 1000);
              return false;
            }
          });
        } else if (link.match("^mailto")) {} else {
          $(this).click(function(e) {
            e.preventDefault();
            $('html').addClass('fadeSiteOut');
            setTimeout(function() {
              window.location = link;
            }, 500);
          });
        }
      }
    });
  });
