<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUDI</title>
    <link rel="icon" type="image" href="./assets/img/rudi logo design 1.png">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">  
    
    <style>
        .intro-container{
            position: relative;
            display: flex;
            height: 76vh;
            justify-content: center;
            /* align-items: center; */
            gap: 4rem;
        }

        .intro-image{
            width: 30%;
            height: 400px;
            overflow: hidden;
            margin-top: 2rem;
        }

        .intro-image img{
            width: 100%;
            height: auto;
        }

        .intro-text{
            width: 40%;
            margin-top: 5rem;
            text-align: justify;
        }

        .intro-text h1{
            font-size: 3rem;
        }

        .intro-text p{
            margin-top: 2rem;
            font-size: 1.2rem;
        }

        .news-container{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .news-container .news-video{
            height: 80%;
            width: auto;
        }

        .news-container .news-video video{
            height: 100%;
            width: auto;
        }

        :root {
    --transition-time: 0.5s;
  }
    .blogs-container{
    background-image: url('../rudi-html/assets/img/agri3.jpg') no-repeat center center fixed;
    background-size: cover;
    background-position: center;
}

.blog-container {
    max-width: 800px;
    margin: 0 auto;
}
.blog-post {
    background: white;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.blog-title {
    font-size: 24px;
    color: #333;
    margin-bottom: 10px;
}
.blog-content {
    font-size: 16px;
    color: #666;
}
.load-more {
    display: block;
    text-align: center;
    padding: 10px 20px;
    background: #007bff;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    margin: 20px auto;
}

.cards-wrapper {
    display: grid;
    justify-content: center;
    align-items: center;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 4rem;
    padding: 4rem;
    margin: 0 auto;
    width: max-content;
  }
  
  .card {
    font-family: 'Heebo';
    --bg-filter-opacity: 0.5;
    background-image: linear-gradient(rgba(0,0,0,var(--bg-filter-opacity)),rgba(0,0,0,var(--bg-filter-opacity))), var(--bg-img);
    height: 20em;
    width: 15em;
    font-size: 1.5em;
    color: white;
    border-radius: 1em;
    padding: 1em;
    /*margin: 2em;*/
    display: flex;
    align-items: flex-end;
    background-size: cover;
    background-position: center;
    box-shadow: 0 0 5em -1em black;
    transition: all, var(--transition-time);
    position: relative;
    overflow: hidden;
    border: 10px solid #ccc;
    text-decoration: none;
  }
  
  .card:hover {
    transform: rotate(0);
  }
  
  .card h1 {
    margin: 0;
    font-size: 1.5em;
    line-height: 1.2em;
  }
  
  .card p {
    font-size: 0.75em;
    font-family: 'Open Sans';
    margin-top: 0.5em;
    line-height: 2em;
  }
  
  .card .tags {
    display: flex;
  }
  
  .card .tags .tag {
    font-size: 0.75em;
    background: rgba(255,255,255,0.5);
    border-radius: 0.3rem;
    padding: 0 0.5em;
    margin-right: 0.5em;
    line-height: 1.5em;
    transition: all, var(--transition-time);
  }
  
  .card:hover .tags .tag {
    background: var(--color);
    color: white;
  }
  
  .card .date {
    position: absolute;
    top: 0;
    right: 0;
    font-size: 0.75em;
    padding: 1em;
    line-height: 1em;
    opacity: .8;
  }
  
  .card:before, .card:after {
    content: '';
    transform: scale(0);
    transform-origin: top left;
    border-radius: 50%;
    position: absolute;
    left: -50%;
    top: -50%;
    z-index: -5;
    transition: all, var(--transition-time);
    transition-timing-function: ease-in-out;
  }
  
  .card:before {
    background: #ddd;
    width: 250%;
    height: 250%;
  }
  
  .card:after {
    background: white;
    width: 200%;
    height: 200%;
  }
  
  .card:hover {
    color: var(--color);
  }
  
  .card:hover:before, .card:hover:after {
    transform: scale(1);
  }
  
  .card-grid-space .num {
    font-size: 3em;
    margin-bottom: 1.2rem;
    margin-left: 1rem;
  }
  .info {
    margin-top: 2rem;
    font-size: 1.2em;
    display: flex;
    padding: 1em 3em;
    height: 3em;
  }
  
  .info img {
    height: 3em;
    margin-right: 0.5em;
  }
  
  .info h1 {
    font-size: 1em;
    font-weight: normal;
  }

   /* MEDIA QUERIES */
  @media screen and (max-width: 1285px) {
    .cards-wrapper {
      grid-template-columns: 1fr 1fr;
    }
  }
  
  @media screen and (max-width: 900px) {
    .cards-wrapper {
      grid-template-columns: 1fr;
    }
    .info {
      justify-content: center;
    }
    .card-grid-space .num {
      /* margin-left: 0; */
      /* text-align: center; */
    }
  }
  
  @media screen and (max-width: 500px) {
    .cards-wrapper {
      padding: 4rem 2rem;
    }
    .card {
      max-width: calc(100vw - 4rem);
    }
  }
  
  @media screen and (max-width: 450px) {
    .info {
      display: block;
      text-align: center;
    }
    .info h1 {
      margin: 0;
    }
  }
    </style>
</head>
<?php include './include/header.php'?>
<section class="intro-container">
    <div class="intro-image">
        <img src="../rudi-html/assets/img/agri1.jpg" alt="">
    </div>

    <div class="intro-text">
        <h1>Agribusiness</h1>
        <p>Agribusiness refers to the industry involved in the production,
             processing, and distribution of agricultural products. It encompasses
              all activities related to farming, including crop cultivation,
               livestock breeding, agrochemicals, farm machinery, food processing,
                marketing, and retail sales. Agribusiness integrates traditional
                 agriculture with modern technology, finance, and supply chain management
                  to improve efficiency and profitability. It includes small family farms,
                   large commercial farms, and multinational corporations involved in agriculture-related enterprises.
        </p>
    </div>
</section>

<section class="news-container">
    <div class="news-video">
        <video autoplay loop muted controls src="../rudi-html/assets/vid/Youth in agribusiness.mp4"></video>
    </div>
</section>

<section class="info">
  
  <h1>Our Stories</h1>
</section>
<section class="cards-wrapper">
  <div class="card-grid-space">
    <div class="num">01</div>
    <a class="card" href="#" style="background-image: url('./assets/img/agri2.jpg')">
      <div>
        <h1>How to start an agribusiness</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic aliquid vitae itaque...</p>
        <div class="date">6 Oct 2024</div>
        
      </div>
    </a>
  </div>
  <div class="card-grid-space">
    <div class="num">02</div>
    <a class="card" href="#" style="background-image: url('./assets/img/village2.jpg')">
      <div>
        <h1>Helping the Strong mothers</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat distinctio perferendis et...</p>
        <div class="date">9 Oct 2024</div>
        
      </div>
    </a>
  </div>
  <div class="card-grid-space">
    <div class="num">03</div>
    <a class="card" href="#" style="background-image: url('./assets/img/village3.jpg')">
      <div>
        <h1>Life on the go as a Pastoralist</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, esse. Beatae, non...</p>
        <div class="date">14 Oct 2024</div>
       
      </div>
    </a>
  </div>
  <!-- https://images.unsplash.com/photo-1520839090488-4a6c211e2f94?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=38951b8650067840307cba514b554ba5&auto=format&fit=crop&w=1350&q=80 -->
</section>

<?php include './include/footer.php'?>