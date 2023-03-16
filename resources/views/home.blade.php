<x-app-layout>
    <x-slot name="header">
        <div class="flex place-content-between">
            <div class="flex">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2 px-2">
                    Home
                </h2>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                @auth
                    <h2 class="text-xl">{{ Auth::user()->greet() }}</h2>

                    <p class="m-4">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, pariatur voluptatum quam 
                        suscipit quasi labore similique dolorem, eum voluptas totam ad ab porro? Saepe officiis 
                        eligendi culpa? Ex, dolore repellat delectus rerum ducimus voluptas officiis quaerat sed 
                        fugit animi nihil ad ut suscipit voluptatum quod molestias? Asperiores mollitia minima perferendis 
                        non, quidem dolores culpa? Alias, autem eum praesentium assumenda veritatis quaerat consectetur 
                        debitis, mollitia maiores animi nobis. Veniam dolore iure quas obcaecati ab est, voluptate 
                        totam quod repudiandae quo cum quibusdam eaque officiis magnam corporis fugit explicabo nam 
                        animi ducimus blanditiis debitis accusantium. Quo tempora ex fugiat doloribus architecto beatae 
                        aliquam omnis, odit ipsam alias facere perspiciatis obcaecati quas, consequatur saepe maiores 
                        id inventore at placeat repellendus repellat quos quae dolores magnam. Necessitatibus, 
                        quidem ab praesentium ipsum voluptates dignissimos illum nostrum asperiores sequi soluta error, 
                        fugiat minima saepe a recusandae minus pariatur quibusdam nesciunt accusantium eligendi iure quae. 
                        Exercitationem, voluptatibus obcaecati. Molestiae dicta enim voluptas, rem illum omnis commodi 
                        perspiciatis explicabo corrupti voluptatem quos facilis blanditiis magnam natus minima culpa 
                        animi odio in ducimus numquam! Atque accusamus consectetur, qui hic maiores cumque distinctio 
                        velit vitae amet quidem a! Architecto, in quae voluptatibus praesentium beatae eos, ipsa necessitatibus 
                        assumenda a tempora sint tempore sunt sapiente magnam maiores deserunt. Ipsam vero ut culpa 
                        numquam, id dolore deserunt deleniti facere distinctio reiciendis, aperiam provident ratione 
                        veritatis inventore, maxime eum atque aut asperiores ad! Veritatis totam rerum id voluptates 
                        aliquam iste saepe ipsam consequuntur, laboriosam in eligendi. Dolorum similique deleniti, dicta 
                        dolore maiores culpa adipisci, reprehenderit itaque velit placeat nostrum ipsam voluptatem 
                        recusandae, vitae possimus doloribus mollitia exercitationem? Dolor maiores molestiae harum et 
                        aut molestias eum? Obcaecati optio ullam sequi quibusdam vero repudiandae assumenda tenetur ipsum.
                    </p>
                @else
                    <h2 class="text-xl">Welcome to About Me!</h2>

                    <p class="m-4">
                        About me is a free webpage where you can post information about who you are, your hobbies,
                        and where people can find you online! On this page you are also able to view information from
                        other user accounts! Customization and colorization of profile page is also coming up soon
                        in the future! So what are you waiting for? Make an account, tell everyone about yourself
                        (perhaps a story of something your passionate about), today!
                    </p>

                    <div class="flex space-x-4 items-center place-content-center">
                        <a href="{{ route('register') }}">
                            <x-button>Get started!</x-button>
                        </a>
                        <span class="font-semibold text-gray-400">OR</span>
                        <a href="{{ route('login') }}">
                            <x-secondary-button>Login</x-secondary-button>
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</x-app-layout>
