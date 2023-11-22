// Utility for older browsers
if (typeof Object.create !== 'function') {
    Object.create = function(obj) {
        function F() {}

        F.prototype = obj;
        return new F();
    };
}

(function($, window, document, undefined) {
    var Instagram = {
        API_URL: 'https://graph.instagram.com/me/media?fields=',
        API_FIELDS: 'caption,media_type,media_url,permalink,timestamp,username',

        /**
     * Initializes the plugin.
     * @param {object} options
     * @param {jQuery Object} elem
     */
        initialize: function(options, elem) {
            this.elem = elem;
            this.$elem = $(elem);
            this.accessToken = $.fn.FCInstagram.accessData.accessToken,
            this.options = $.extend({}, $.fn.FCInstagram.options, options);

            this.messages = {
                defaultImageAltText: 'Instagram Photo',
                notFound: 'This user account is private or doesn\'t have any photos.',
            };

            this.getPhotos();
        },

        /**
     * Calls the fetch function and work with the response.
     */
        getPhotos: function() {
            var self = this;
            //   messages = null;

            self.fetch().done(function(results) {
                if (results.data) {
                    self.displayPhotos(results);
                } else if (results.error.message) {
                    $.error('FCInstagram.js - Error: ' + results.error.message);
                } else {
                    $.error('FCInstagram.js - Error: user does not have photos.');
                }
            });
        },

        /**
     * Makes the ajax call and returns the result.
     */
        fetch: function() {
            var getUrl =
        this.API_URL + this.API_FIELDS + '&access_token=' + this.accessToken;

            return $.ajax({
                type: 'GET',
                dataType: 'jsonp',
                cache: false,
                url: getUrl,
            });
        },

        /**
     * Appends the markup to the DOM with the images.
     * @param {object} results
     */
        displayPhotos: function(results) {
            let $element,
                $item,
                $image,
                $source,
                $video,
                hasCaption,
                imageGroup = [],
                imageCaption,
                autoplay,
                max;

            max =
        this.options.max >= results.data.length
            ? results.data.length
            : this.options.max;

            if (results.data === undefined || results.data.length === 0) {

                this.$elem.append(this.messages.notFound);

                return;
            }

            for (var i = 0; i < max; i++) {
                hasCaption = results.data[i].caption !== null || results.data[i].caption !== undefined;
                imageCaption = hasCaption ? $('<span>').text(results.data[i].caption).html() : this.messages.defaultImageAltText;
                if (results.data[i].media_type === 'IMAGE' || results.data[i].media_type === 'CAROUSEL_ALBUM') {
                    $image = $('<img>', {
                        'data-src': results.data[i].media_url,
                        class: 'lazyload',
                        alt: imageCaption.substring(0, 97) + '...'
                    });
                    $item = $('<button>', {
                        type: 'button',
                        class: 'item',
                        'data-fancybox': 'instagram-gallery',
                        'data-src': results.data[i].media_url,
                        'aria-label': `Item ${i + 1} de ${max} da galeria. ${imageCaption.substring(0, 97) + '...'}`
                    }).append($image);
                    $element = $('<div class="col">').append($item);

                    // Add item
                    imageGroup.push($element);
                } else if (results.data[i].media_type === 'VIDEO') {
                    autoplay = this.options.autoplay === true ? 'autoplay muted loop playsinline' : '';
                    $source = $('<source>', {
                        src: results.data[i].media_url,
                        type: 'video/mp4',
                    });

                    $video = $('<video ' + autoplay + 'data-src="' + results.data[i].media_url + '" class="lazyload" alt="' +
                    imageCaption.substring(0, 97) + '...' + '">').append($source);

                    $item = $('<button>', {
                        type: 'button',
                        class: 'item',
                        'data-fancybox': 'instagram-gallery',
                        'data-src': results.data[i].media_url,
                        'aria-label': `Item ${i + 1} de ${max} da galeria. Vídeo. ${imageCaption.substring(0, 97)}...`
                    }).append($video);

                    $element = $('<div class="col">').append($item);

                    // Add item
                    imageGroup.push($element);
                }
            }

            this.$elem.append(imageGroup);

            if (typeof this.options.complete === 'function') {
                this.options.complete.call(this);
            }
        },
    };

    /**
   * FCInstagram Plugin Definition.
   */
    jQuery.fn.FCInstagram = function(options) {
        if (jQuery.fn.FCInstagram.accessData.accessToken) {
            this.each(function() {
                var instagram = Object.create(Instagram);

                instagram.initialize(options, this);
            });
        } else {
            $.error('You must define an accessToken on jQuery.FCInstagram');
        }
    };

    // Plugin Default Options.
    jQuery.fn.FCInstagram.options = {
        complete: null,
        max: 9,
        autoplay: false
    };

    // Instagram Access Data.
    jQuery.fn.FCInstagram.accessData = {
        accessToken: null,
    };
})(jQuery, window, document);
