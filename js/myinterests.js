const API_URL = "https://api.themoviedb.org/3/";
const IMG_URL = "https://image.tmdb.org/t/p/w185/";
const API_KEY = "?api_key=09ad8ace66eec34302943272db0e8d2c";
const movieArr = ['movie/293660', 'movie/383498', 'movie/508442', 'movie/318846', 'movie/2062',
    'movie/177572', 'movie/150540', 'movie/297222', 'movie/20352', 'movie/2109',
    'movie/5175', 'movie/5174', 'movie/577922'];
const seriesArr = ['tv/71446', 'tv/62560'];

const template = `<div class="card bg-dark" style="width: 50rem;">
                        <img class="card-img-top" src="$img" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">$title</h5>
                        </div>
                    </div>`;
const movies = document.getElementById("movies");
const series = document.getElementById("series");

movieArr.forEach(id => {
    fetch(API_URL + id + API_KEY).then(response => {
        return response.json();
    }).then(data => {
        var html = template;
        html = html.replace("$title", data.title);
        html = html.replace("$img", IMG_URL + data.poster_path);
        movies.insertAdjacentHTML('beforeend', html);
    });
});

seriesArr.forEach(id => {
    fetch(API_URL + id + API_KEY).then(response => {
        return response.json();
    }).then(data => {
        var html = template;
        html = html.replace("$title", data.name);
        html = html.replace("$img", IMG_URL + data.poster_path);
        series.insertAdjacentHTML('beforeend', html);
    });
});