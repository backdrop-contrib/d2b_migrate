(function($) {
  Backdrop.behaviors.d2bMigrate = {
    attach: function(context) {
      var search = 'Available for download';
      $('#d2b-migrate-analysis-form table tbody tr').filter(function () {
        return !$(this).find('td').filter(function () {
          return $(this).text().indexOf(search) != -1;
        }).length;
      }).find('input').attr('disabled', true);
    }
  }
})(jQuery);
