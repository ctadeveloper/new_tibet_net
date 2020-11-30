(function($) {
    $.fn.noApishare = function(args) {        
        var svcData = {
            'facebook': {
                        base: 'http://www.facebook.com/share.php?', 
                        urlkey: 'u='
                        },
            'twitter': {
                        base: 'http://twitter.com/intent/tweet?', 
                        urlkey: 'url='
                        },
            'pinterest': {
                        base: 'http://pinterest.com/pin/create/button/?', 
                        urlkey: 'url=',
                        imgkey: 'media=',
                        titlekey: 'title=' 
                        },
            'linkedin': {
                        base: 'http://www.linkedin.com/shareArticle?', 
                        urlkey: 'url='
                        },
            'google-plus': {
                        base: 'https://plus.google.com/share?', 
                        urlkey: 'url='
                        },
            'reddit':   {
                        base: 'http://www.reddit.com/submit?',
                        urlkey: 'url='
                        },
            'tumblr':   {
                        base: 'http://www.tumblr.com/share?v=3&',
                        urlkey: 'u=',
                        titlekey: 't='
                        },
            'stumbleupon': {
                        base: 'http://www.stumbleupon.com/submit?',
                        urlkey: 'url=',
                        titlekey: 'title='
                        },
            'email': {
                        base: 'mailto:?',
                        urlkey: 'body=',
                        titlekey: 'subject='
                        }
        },
        settings = $.extend({
            'icons': true, 
            'set': '1',
            'url': window.location.href,
            'image': '#noapishare-pinterest',
            'title': document.getElementsByTagName("title")[0].innerHTML,
        }, args),
        $noapilinks = $(this),
        parenturl = $(this).parent().data('url') || $(this).parent().parent().data('url'),
        // sharelink = $(this).data("socialshare").sharelink,
        // sharetitle = $(this).data("socialshare").sharetitle,
        $image = $(settings.image),
        popup = function(e) {
            var nw = window.open(e.data.url, e.data.title,'height=400,width=600');
            if (window.focus) {
                nw.focus()
            }
            return false;
        },
        iconNum = '',
        service, s, href, src;
        


        if (parenturl) {
        	settings.url = parenturl;
        }
        /*
        if (sharelink) {
            settings.url = sharelink;
        }

         if (sharetitle) {
           settings.title = sharetitle;
        }
        */
        
        $("#hhh_share_title").html(settings.title); 
       // $("#hhh_share_title").html(settings.title + ' | Hidden Human History');
       // $("#hhh_index_share_title").html(settings.title);
       // $("#hhh_share_url").html(settings.url);
       
        $noapilinks.each(function() {
            service = $(this).data('service');
            s = svcData[service];
            if (s !== undefined) {

                href = s.base + s.urlkey + escape($(this).data('url') || settings.url);
                if ($image && s.imgkey) {
                	href = href + '&' + s.imgkey + $image[0].src;
                }
                if (settings.icons) {
                    $(this).addClass('icon-'+service+(service=='newservicestoadd'&&iconNum=='-3' ? '' : iconNum));
                }
                $(this).attr('href', href);
                $(this).bind('click', {'url':href, 'title':'Share on '+service}, popup);
            }
        });
        
        
    }
})(jQuery);



/*


        if (settings.set == '1') {
            iconNum = '-1';
        } else if (settings.set == '2') {
            iconNum = '-2';
        } else if (settings.set == '3') {
            iconNum = '-3';
        } else if (settings.set == '4') {
            iconNum = '-4';
        } else if (settings.set == '5') {
            iconNum = '-5';
        } else if (settings.set == '6') {
            iconNum = '-6';
        } else if (settings.set == '7') {
            iconNum = '-7';
        } else if (settings.set == '8') {
            iconNum = '-8';
        }
        
        
*/