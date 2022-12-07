var URL = 'http://t.me/cscscfdgfjh'

var output = document.getElementById('output');
var button = document.getElementById('button');

var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() {
    if (xhr.readyState != 4) return;

    if (xhr.status == 200) {
        data = JSON.parse(xhr.responseText);
        response =            data;
        for (var x = 0; x < data.items.length; x++) {
            response.push('<p>' + data.items[x].owner.display_name + '</p>');
        }
        output.innerHTML = response.join('');
    }
    else {
        alert('Ошибка! ' + xhr.statusText);
    }
    
    button.innerHTML = 'Нажми меня';
    button.disabled = false;
};

button.addEventListener('click', function(event) {
    this.innerHTML = 'Загружаю...';
    this.disabled = true;
    
    xhr.open('GET', URL, true);
    xhr.send();
});