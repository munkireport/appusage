var appNameToLink = function(colNumber, row){
    var col = $('td:eq('+colNumber+')', row),
        appName = col.text();
    col.html($('<a>').attr('href', appUrl+'/module/inventory/items/'+appName).text(appName))
}

var localizeEvent = function(colNumber, row){
    var col = $('td:eq('+colNumber+')', row),
        event = col.text();
    event = event == 'launch' ? i18n.t('appusage.launch') :
    event = event == 'activate' ? i18n.t('appusage.activation') :
    (event === 'quit' ? i18n.t('appusage.quit') : '') 
    col.text(event)
}
