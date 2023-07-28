<div class="reviews-container page-width side-padding">

    <h4>Our reviews</h4>
    <img src="./imgs/line-dot-line.svg" alt="" width="113">
    <h1>Words from <span>Our Valued Customers</span> </h1>
    <div class="reviews-slider">


        <div class="reviews">
            <div class="review">
                <div class="user-details">
                    <div class="user-info">
                        <img src="./imgs/user-dp.png" alt="" width="100">
                        <div class="name-star">
                            <h5>alone musk</h5>
                            <img src="./imgs/stars.png" alt="">
                        </div>
                    </div>

                    <img src="./imgs/comma.png" alt="">
                </div>

                <div class="user-review-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempus blandit dia m. In hac
                        habitasse platea dictumst. In velit tortor, tempor non enim vel, facilisis malesuada sem. Nam
                        et dapibus, fringilla
                        libero. Proin sed finibus odio, eget pellentesque nislL orem ipsum dolor sit amet, consectet</p>
                </div>
            </div>
            <div class="review">
                <div class="user-details">
                    <div class="user-info">
                        <img src="./imgs/user-dp.png" alt="" width="100">
                        <div class="name-star">
                            <h5>ashu pandey</h5>
                            <img src="./imgs/stars.png" alt="">
                        </div>
                    </div>

                    <img src="./imgs/comma.png" alt="">
                </div>

                <div class="user-review-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempus blandit dia m. In hac
                        habitasse platea dictumst. In velit tortor, tempor non enim vel elit dapibus, fringilla
                        libero. Proin sed finibus odio, eget pellentesque nislL orem ipsum dolor sit amet, consectet</p>
                </div>
            </div>
            <!-- Add more reviews here -->
            <div class="review">
                <div class="user-details">
                    <div class="user-info">
                        <img src="./imgs/user-dp.png" alt="" width="100">
                        <div class="name-star">
                            <h5>puvan sharma</h5>
                            <img src="./imgs/stars.png" alt="">
                        </div>
                    </div>

                    <img src="./imgs/comma.png" alt="">
                </div>

                <div class="user-review-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempus blandit dia m. In hac
                        habitasse platea dictumst. In velit tortor, tempor non enim vel, facilisis malesuada sem. Nam
                        egestas eu felis sed auctor. Pellentesque a nunc egestas, el eif end elit dapibus, fringilla
                        libero. Proin sed finibus odio, eget pellentesque nislL orem ipsum dolor sit amet, consectet</p>
                </div>
            </div>
            <div class="review">
                <div class="user-details">
                    <div class="user-info">
                        <img src="./imgs/user-dp.png" alt="" width="100">
                        <div class="name-star">
                            <h5>Aastha zudio</h5>
                            <img src="./imgs/stars.png" alt="">
                        </div>
                    </div>

                    <img src="./imgs/comma.png" alt="">
                </div>

                <div class="user-review-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempus blandit dia m. In hac
                        habitasse platea dictumst. In velit tortor, tempor non enim vel, facilisis malesuada sem. Nam
                        egestas eu felis sed auctor. Pellentesque a nunc egestas, el eif end elit dapibus, fringilla
                        libero. Proin sed finibus odio, eget pellentesque nislL orem ipsum dolor sit amet, consectet</p>
                </div>
            </div>
            <div class="review">
                <div class="user-details">
                    <div class="user-info">
                        <img src="./imgs/user-dp.png" alt="" width="100">
                        <div class="name-star">
                            <h5>shubham</h5>    
                            <img src="./imgs/stars.png" alt="">
                        </div>
                    </div>

                    <img src="./imgs/comma.png" alt="">
                </div>

                <div class="user-review-text">
                    <p>Lorem ipsum dolor sit amet, consectetu
                        habitasse platea dictumst. In velit tortor, tempor non enim vel, facilisis malesuada sem. Nam
                        egestas eu felis sed auctor. Pellentesque a nunc egestas, el eif end elit dapibus, fringilla
                        libero. Proin sed finibus odio, eget pellentesque nislL orem ipsum dolor sit amet, consectet</p>
                </div>
            </div>
            <div class="review">
                <div class="user-details">
                    <div class="user-info">
                        <img src="./imgs/user-dp.png" alt="" width="100">
                        <div class="name-star">
                            <h5>vivek bhuva</h5>
                            <img src="./imgs/stars.png" alt="">
                        </div>
                    </div>

                    <img src="./imgs/comma.png" alt="">
                </div>

                <div class="user-review-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempus blandit dia m. In hac
                        habitasse platea dictumst. In velit tortor, tempor non enim vel, facilisis Pellentesque a nunc
                        egestas, el eif end elit dapibus, fringilla
                        libero. Proin sed finibus odio, eget pellentesque nislL orem ipsum dolor sit amet, consectet</p>
                </div>
            </div>
        </div>

    </div>

    <div class="button-arrow">

        <img class="left-arrow  space" src="./imgs/left-golden-arrow.png" alt="">
        <img class="right-arrow  space" src="./imgs/right-golden-arrow.png" alt="">
    </div>
</div>

<script>
    const reviews = document.querySelectorAll('.review');
    let currentIndex = 0;
    const numReviewsToShow = 2;

    function showReviews() {
        for (let i = 0; i < reviews.length; i++) {
            reviews[i].classList.remove('active');
        }

        for (let i = 0; i < numReviewsToShow; i++) {
            const indexToShow = (currentIndex + i) % reviews.length;
            reviews[indexToShow].classList.add('active');
        }
    }

    function showPreviousReviews() {
        currentIndex = (currentIndex - numReviewsToShow) % reviews.length;
        if (currentIndex < 0) {
            currentIndex = reviews.length + currentIndex;
        }
        showReviews();
    }

    function showNextReviews() {
        currentIndex = (currentIndex + numReviewsToShow) % reviews.length;
        showReviews();
    }

    document.querySelector('.reviews-container').addEventListener('click', function (event) {
        const target = event.target;
        if (target.matches('.left-arrow')) {
            showPreviousReviews();
        } else if (target.matches('.right-arrow')) {
            showNextReviews();
        }
    });

    showReviews(); // Show initial reviews

</script>