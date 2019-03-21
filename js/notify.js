function setNotify(message){

    $.notify({
        title: "",
        message: message,
        icon: '',
        target: "_blank"
        },{

        // where to append the notification
        element: 'body',

        // static | fixed | relative | absolute
        position: 'absolute',

        // notification type
        type: "error",

        // is dismissable?
        allow_dismiss: true,

        // allows duplicate notifications
        allow_duplicates: true,

        // put the newest notification on the top
        newest_on_top: false,

        // shows a progress bar
        showProgressbar: false,

        // placement options
        placement: {
            from: "top",
            align: "right"
        },

        // offset in pixels
        offset: 20,

        // space between notifications
        spacing: 10,

        // z-index property
        z_index: 1031,

        // delay in milliseconds
        delay: 5000,

        // timer in millisconeds
        timer: 1000,

        // URL target property
        url_target: '_blank',

        // pause the timer on hover
        mouse_over: null,

        // animation options
        animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutUp'
        },

        // or 'image'
        icon_type: 'class',

        // custom template
        template: '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-{0}" style="background-color:#bd59d4;color:white" role="alert"><button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button><span data-notify="icon"></span> <span data-notify="title">{1}</span> <span data-notify="message">{2}</span><div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div><a href="{3}" target="{4}" data-notify="url"></a></div>'
        
		});
	}
