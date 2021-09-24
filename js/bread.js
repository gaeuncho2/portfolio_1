var data='';

$.ajax({
    type:'GET',
    url: './product.json',
    dataType: 'json',
    success: function(getdata){
        data = getdata
        useData('part1')
    },
    error: function(xhr){
        alert(xhr.status + '/' + xhr.errorText)
    }
})

function useData(keyname){
    $('.breadList').remove()
    
    var elem = `<ul class="breadList cf">`
    $(data[keyname]).each(function( index, obj){
        elem += ` <li><a href="#none">`
        elem += `<img src="${obj.photo}" alt="">`
        elem += `<strong>${obj.name}</strong></a></li>`
    })
    elem += `</ul>`
    $('.wrap').append(elem)
}

$('.tabTit li a').on('click', function(){
    var part = $(this).attr('href')
    useData(part)
    return false
})

$('.mobile').on('click', function(){
    if ( !$('#header').hasClass('mobile') ){
        $('#header').addClass('mobile')
    } else {
        $('#header').removeClass('mobile')
    }
})
