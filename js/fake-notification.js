/* ========= INFORMATION ============================
 
	- document:  Fake Notifications - creating effective herd effects
	- author:    Wow-Company @ Codecanyon
	- profile:   https://codecanyon.net/user/wow-company
	- version:   1.1
	- email:     wow@wow-company.com
 
 ==================================================== */

! function(a) {
    "use strict";
    a.fn.Notification = function(b) {
        var c = a.extend({ Varible1: ["Emma", "Noah", "Olivia", "Liam", "Ava", "William"], Varible2: ["Bangkok", "London", "Paris", "Dubai", "New York", "Singapore"], Amount: [100, 2500], Content: '[Varible1] from [Varible2] has just placed an order for $[Amount].', Show: ['stable', 5, 25], Close: 5, Time: [0, 23], LocationTop: [true, '10%'], LocationBottom: [false, '10%'], LocationRight: [true, '10%'], LocationLeft: [false, '10%'], Background: 'black', BorderRadius: 5, BorderWidth: 1, BorderColor: 'red', TextColor: 'white', IconColor: 'white', AnimationEffectOpen: 'fadeIn', AnimationEffectClose: 'fadeOut', Number: 3, Link: [false, 'https://codecanyon.net/user/wow-company/portfolio', '_blank'] }, b);
        return this.each(function() {
            var self = this;
            var number = 0;
            var currenttime = new Date();
            var currenthours = currenttime.getHours();
            if (c.Time[0] <= currenthours && currenthours <= c.Time[1]) { A(); }
            B();

            function B() {
                a(self).addClass('animated');
                if (c.LocationTop[0] == true) { if (c.LocationRight[0] == true) { a(self).css({ 'top': c.LocationTop[1], 'right': c.LocationRight[1], }); } else { a(self).css({ 'top': c.LocationTop[1], 'left': c.LocationLeft[1], }); } } else { if (c.LocationRight[0] == true) { a(self).css({ 'bottom': c.LocationTop[1], 'right': c.LocationRight[1], }); } else { a(self).css({ 'bottom': c.LocationTop[1], 'left': c.LocationLeft[1], }); } }
                a(self).css({ 'border-radius': c.BorderRadius + 'px', 'border-width': c.BorderWidth + 'px', 'border-color': c.BorderColor, 'background': c.Background });
                a(self).find('.notification-img').css({ 'color': c.IconColor });
                a(self).find('.notification-text-block').css({ 'color': c.TextColor });
                if (c.Link[0] == true) {
                    a(self).attr("onclick", "window.open('" + c.Link[1] + "','" + c.Link[2] + "');");
                    a(self).css({ 'cursor': 'pointer' });
                }
            };

            function A() {
                if (c.Show[0] == 'stable') { var open = c.Show[1] * 1000; } else { var open = (Math.floor(Math.random() * (c.Show[2] - c.Show[1])) + c.Show[1]) * 1000; }
                setTimeout(function() {
                    J();
                    a(self).show();
                    D();
                    var rand_heard_name = Math.floor(Math.random() * c.Varible1.length);
                    var rand_heard_city = Math.floor(Math.random() * c.Varible2.length);
                    var rand_heard_number = Math.floor(Math.random() * (c.Amount[0] - c.Amount[1])) + c.Amount[1];
                    if (c.Content.indexOf('[Varible1]') + 1) { var content = c.Content.replace("[Varible1]", c.Varible1[rand_heard_name]); } else { var content = c.Content.replace("[Varible1]", c.Varible1[rand_heard_name]); }
                    if (content.indexOf('[Varible2]') + 1) { var content = content.replace("[Varible2]", c.Varible2[rand_heard_city]); } else { var content = content.replace("[Varible2]", c.Varible2[rand_heard_city]); }
                    var content = content.replace("[Amount]", rand_heard_number);
                    a(self).find('.notification-text').html(content);
                    number++;
                    C();
                }, open);
            }

            function C() {
                var close = c.Close * 1000;
                setTimeout(function() {
                    E();
                    F();
                    if (number < c.Number) { A(); }
                }, close);
            }

            function D() { a(self).addClass(c.AnimationEffectOpen); }

            function E() { a(self).removeClass(c.AnimationEffectOpen); }

            function F() { a(self).addClass(c.AnimationEffectClose); }

            function J() { a(self).removeClass(c.AnimationEffectClose); }
        });
    }
}(jQuery);