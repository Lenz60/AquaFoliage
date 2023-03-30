@extends('layout.template')

@section('homeContainer')
<link rel="stylesheet" type="text/css" href="/css/app.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kreon:wght@300&family=Poppins:wght@300&display=swap" rel="stylesheet">
<script src="https://unpkg.com/split-type"></script>
<section class="bg-center bg-cover bg-home1">
    <div class="py-96 transform-gpu justify-center items-center text-center">
        <h2 id="text1" class="font-kreon text-[70px] text-white overflow-hidden">Identify Your Aquatic Plants</h2>
        <p id="text2" class="font-poppins text-[20px] text-transparent overflow-hidden">Get to know your aquatic plant characteristics</p>
    </div>
</section>
<section class="bg-center bg-cover bg-home2">
    <div class="py-60 ">
        <div class="grid grid-cols-4 bg-slate-400 text-center justify-center items-center">
            <div class="grid grid-rows-2 px-5 border-2 border-black">
                <img src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi laudantium quod obcaecati iusto aspernatur necessitatibus doloremque quos minima, inventore molestias officiis rem incidunt aperiam soluta ipsam est blanditiis. Provident</p>
            </div>
            <div class="grid grid-rows-2 px-5 border-2 border-black">
                <img src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod est at minima numquam consequuntur veritatis ducimus vero iusto, velit praesentium quidem omnis ipsum sapiente optio nesciunt voluptate fuga voluptatem iure?</p>
            </div>
            <div class="grid grid-rows-2 px-5 border-2 border-black">
                <img src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus tenetur earum praesentium inventore dolor illo! Odio enim dolore error consequatur totam quasi suscipit blanditiis, velit minus cum mollitia consectetur voluptates?</p>
            </div>
            <div class="grid grid-rows-2 px-5 border-2 border-black">
                <img src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, aliquid eaque ipsum perspiciatis vitae corporis iste maiores repellendus? Odit at voluptate maxime fugit vel eius officiis aut repellendus nulla beatae!</p>
            </div>
        </div>
    </div>
</section>

<script>
    let text1 = new SplitType('#text1');
    let text2 = document.getElementById('text2');
    let characters = document.querySelectorAll('.char');
    text2.classList.add('translate-y-full');

    for (i = 0; i < characters.length; i++) {
        characters[i].classList.add('translate-y-full');
    }

    gsap.to('#text2', {
        y: 0,
        color: "#FFFFFF",
        stagger: 0.05,
        delay: 0.5,
        duration: 1,
    });

    gsap.to('.char', {
        y: 0,
        stagger: 0.05,
        delay: 0.02,
        duration: 0.5
    });
</script>

@endsection