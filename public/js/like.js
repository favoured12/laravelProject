var postID = 0;

$('.like').on('click', function(event){
    
    event.preventDefault();
    postID = event.target.parentNode.parentNode.dataSet['postID'];
    var isLike = event.target.previousElementSibling == null;

    $.ajax({
        method : 'POST',
        url : urlLike,
        data : {isLike: isLike, postID: postID, _token: token}
    })
    .done(function(){
        event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'You like this post' : 'Like' : event.target.innerText == 'Dislike' ? 'You dislike this post': 'Dislike';
        if(isLike){
            event.target.nextElementSibling.innerText = 'Dislike';
        } else {
            event.target.previousElementSibling.innerText = 'Like';
        }
    });


});