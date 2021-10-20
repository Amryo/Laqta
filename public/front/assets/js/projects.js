

$('.category').click(function (event) {
    event.preventDefault();
    $('.category').removeClass('mixitup-control-active');
    $(this).toggleClass('mixitup-control-active');

    $.ajax({
        url: $(this).attr('href'),
        type: 'get',
        success: function (data) {
            $('#projects').empty();

            for (let i in data) {
                item = data[i];
                console.log(item);
                $('#projects').append(`<a href="http://127.0.0.1:8000/projects/show/${item.id}"
                class="project containerMixItUpProjects-item mix branding government position-relative col-12 col-sm-6 col-lg-4 col-xl-3 px-0">
                <div class="aboutSectionItemGradient position-absolute w-100 h-100 start-0 top-0 zIndex-20"></div>
                <img class="w-100 h-100 start-0 top-0 zIndex-10" src="http://127.0.0.1:8000/front/assets/imgs/project-8.webp"
                    alt="Our Projects">
                <div class="position-absolute containerMixItUpProjects-content zIndex-30">
                    <p class="mb-0 fs-18px text-uppercase ft-Gilroy-bold text-white">${item.name}</p>
                    <p class="mb-0 text-secondary-sm-subtitle fs-12px">${item.secondary}</p>
                </div>
            </a>`);
            }

            $('.project').slideUp(200).delay(400).fadeIn(300);


        }
    });
})


$('.feature').click(function (event) {
    event.preventDefault();
    $('.feature').removeClass('mixitup-control-active');
    $(this).toggleClass('mixitup-control-active');

    console.log($(this).attr('href'));
    $.ajax({
        url: $(this).attr('href'),
        type: 'get',
        success: function (data) {
            console.log(data);
            $('#projects').empty();

            for (let i in data) {
                item = data[i];
                console.log(item);
                $('#projects').append(`<a href="http://127.0.0.1:8000/projects/show/${item.id}"
                    class="project containerMixItUpProjects-item mix branding government position-relative col-12 col-sm-6 col-lg-4 col-xl-3 px-0">
                    <div class="aboutSectionItemGradient position-absolute w-100 h-100 start-0 top-0 zIndex-20"></div>
                    <img class="w-100 h-100 start-0 top-0 zIndex-10" src="http://127.0.0.1:8000/front/assets/imgs/project-8.webp"
                        alt="Our Projects">
                    <div class="position-absolute containerMixItUpProjects-content zIndex-30">
                        <p class="mb-0 fs-18px text-uppercase ft-Gilroy-bold text-white">${item.name}</p>
                        <p class="mb-0 text-secondary-sm-subtitle fs-12px">${item.secondary}</p>
                    </div>
                </a>`);
            }
            $('.project').slideUp(200).delay(400).fadeIn(300);


        }
    });
})


