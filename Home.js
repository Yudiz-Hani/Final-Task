//for current local time
function getTime() {
    let time = document.getElementById("clock");
    setInterval(() => {
        let date = new Date();
        time.innerphp = date.toLocaleTimeString();
    })
}

getTime();

//get GIF from API
var i = 0;
function getGif() {
    fetch("https://api.giphy.com/v1/gifs/search?q=funny+cat&api_key=K155f4ntsKBCQl08rBbqxk7PZ6obOPXV")
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
            function image(image_url) {
                document.getElementById("mygif").src = data.data[i].images.original.url;
                console.log(image_url)
            }
            image(data.message);
        })
    i++;
}
setInterval(getGif, 1000);

// function for weather of current location

function getWeather() {
    let temperature = document.getElementById("temp");
    let description = document.getElementById("desc");
    let location = document.getElementById("loc");

    location.innerphp = "Locating...";

    navigator.geolocation.getCurrentPosition(success, error);

    function success(position) {
        latitude = position.coords.latitude;
        longitude = position.coords.longitude;

        fetch(`https://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&appid=f146799a557e8ab658304c1b30cc3cfd&units=imperial`)

        .then(response => response.json())
        .then(data => {
            console.log(data);
            let temp = data.main.temp;
            temperature.innerphp = temp + "° F";
            location.innerphp = data.name;
            description.innerphp = data.weather[0].main;
        });
    }

    function error() {
        location.innerphp = "Unable to retrieve your location";
    }
}

getWeather();

//function for logout
function logout() {
    localStorage.clear();
    window.location = "./login.php"
    return false;
}
