$('body').delegate('#search_box', 'keypress', function(e) {
    if (e.keyCode == 13) {
        get_data();
    }
});

function get_data(base_url){
    console.log(base_url);
    var query = $('#search_box').val();
    $("#loading").slideToggle('slow');
    $("#news_article tr").remove();
    $("#news_topic tr").remove();    
    
    $.ajax({
        type: "POST",
        url: base_url + "index.php/codeigniter_user/get_data",
        async: true,
        cache: false,
        timeout:50000,
        dataType: 'json',
        data:{
            "query": query
        },

        success: function(data){
            //console.log(data['article_set']);
            if (data != null){
                var x;
                var article_data = '<tr><th>Articles</th></tr>';
                $('#news_article').append(article_data);
                for (x = 0; x < data['article']['article_set'].length; x++) {
                    article_data = '<tr><td><b>Title:</b> ' + data['article']['article_set'][x]['title'] + '<br/><b>Descripton:</b> '+
                    data['article']['article_set'][x]['description'] + '</td></tr></br>';
                    $('#news_article').append(article_data);
                }
                article_data = '<tr><th>Topics</th></tr>';
                $('#news_topic').append(article_data);
                for (x = 0; x < data['topic']['topic_set'].length; x++) {
                    article_data = '<tr><td><b>Topic name:</b> ' + data['topic']['topic_set'][x]['name'] + '</br><b>Description:</b> '+
                    data['topic']['topic_set'][x]['description'] + '</td></tr></br>';
                    $('#news_topic').append(article_data);
                }
            }
            $('#search_box').val("");
            $('#news_article').slideDown('slow');
            $('#news_topic').slideDown('slow');
            $("#loading").slideToggle('slow');
        },
        error: function(){
        }
    });
}