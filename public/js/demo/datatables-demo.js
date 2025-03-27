// Call the dataTables jQuery plugin
$(function() {
  $('#dataTable').DataTable({
      dom: 'Bfrtip',
      buttons: [
        'excel', 'pdf'
      ],
      responsive: true,
      processing: true,
      stateSave: true,
      order: [[0, 'desc']],
      language: {
        url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json',
      },
    }
  );


  $('#dataTableSearch thead tr')
        .clone(true)
        .addClass('filters')
        .appendTo('#dataTableSearch thead');
 
  var table = $('#dataTableSearch').DataTable({
      dom: 'Bfrtip',
      buttons: [
        'excel', 'pdf'
      ],
      responsive: true,
      processing: true,
      stateSave: true,
      order: [[0, 'desc']],
      language: {
        url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json',
      },
      orderCellsTop: true,
      fixedHeader: true,
      initComplete: function () {
          var api = this.api();
          // For each column
          api
              .columns()
              .eq(0)
              .each(function (colIdx) {
                  // Set the header cell to contain the input element
                  var cell = $('.filters th').eq(
                      $(api.column(colIdx).header()).index()
                  );
                  var title = $(cell).text();
  
                  if ($(api.column(colIdx).header()).index() >= 0 && $(api.column(colIdx).header()).index()<5) {
                    $(cell).html('<input type="text" class="form-control form-control-sm" placeholder="' + title + '" />');
                  }
                  //$(cell).html('<input type="text" class="form-control form-control-sm" placeholder="' + title + '" />');
                  // On every keypress in this input
                  $(
                      'input',
                      $('.filters th').eq($(api.column(colIdx).header()).index())
                  )
                      .off('keyup change')
                      .on('change', function (e) {
                          // Get the search value
                          $(this).attr('title', $(this).val());
                          var regexr = '({search})'; //$(this).parents('th').find('select').val();

                          var cursorPosition = this.selectionStart;
                          // Search the column for that value
                          api
                              .column(colIdx)
                              .search(
                                  this.value != ''
                                      ? regexr.replace('{search}', '(((' + this.value + ')))')
                                      : '',
                                  this.value != '',
                                  this.value == ''
                              )
                              .draw();
                      })
                      .on('keyup', function (e) {
                          e.stopPropagation();
                          $(this).trigger('change');
                          $(this)
                              .focus()[0]
                              .setSelectionRange(cursorPosition, cursorPosition);
                      });
              });
      },
  });
});
