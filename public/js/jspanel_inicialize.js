$(function(){
  jsPanel.globalCallbacks = function (panel) {
    if (panel.options.paneltype === 'standard') {
      panel.titlebar.addEventListener('dblclick', function () {
        if (panel.status !== 'maximized') {
          panel.maximize();
        } else {
          panel.normalize();
        }
      });
    }
  };

  $("body").on("click",".link_jspanel",function(e){
      e.preventDefault();
      e.target = e.currentTarget;
      jsPanel.create({
        theme:       'bootstrap-primary',
        headerTitle: e.target.name,
        position: 'center-top',
        contentSize: {
            width:  $(window).width() * 0.7,
            height: $(window).height() * 0.5,
        },
        contentOverflow: 'hidden',
        content: '<iframe src='+e.target.href+' focus="true" style="width: 100%; height: 100%;" tabindex="0" class="jspanel" name="jspanel"></iframe>',
        closeOnEscape: true
      }); 
  });

  $("body").on("click",".link_jspanel_form_new",function(e){
    e.preventDefault();
    e.target = e.currentTarget;
    jsPanel.create({
      theme:       'bootstrap-primary',
      headerTitle: e.target.name,
      dragit: {
        snap: true
      },
      position: 'center-top',
      contentOverflow: 'scroll',
      contentSize: {
          width:  $(window).width() * 0.9,
          height: $(window).height() * 0.7,
      },
      closeOnEscape: true,
      contentAjax: e.target.dataset.url
    });
  });
  
  $("body").on("click",".link_jspanel_form",function(e){
    e.preventDefault();
    e.target = e.currentTarget;
    jsPanel.create({
      theme:       'bootstrap-primary',
      headerTitle: e.target.name,
      dragit: {
        snap: true
      },
      position: 'center-top',
      contentOverflow: 'scroll',
      contentSize: {
          width:  $(window).width() * 0.5,
          height: $(window).height() * 0.5,
      },
      closeOnEscape: true,
      contentAjax: e.target.dataset.url
    });
  });   
});