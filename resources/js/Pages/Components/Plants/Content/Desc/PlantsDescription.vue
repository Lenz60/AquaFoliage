<template>
    <div :key="componentKey">
        <h3 class="font-montserrat font-semibold text-xl p-5">
            {{ Payload["name"] }}
        </h3>
        <p class="text-md font-montserrat pl-5">
            Common name : {{ Payload["common_name"] }}
        </p>
        <div class="flex p-5">
            <div>
                <img
                    src="https://pbs.twimg.com/profile_images/1289815343892819969/zIk4dt2E_400x400.jpg"
                    class="w-[200px] h-[200px]"
                />
            </div>
            <div class="font-montserrat text-sm p-5 ml-[10%]">
                <p>Genus : {{ Payload["genus"] }}</p>
                <p>Species : {{ Payload["species"] }}</p>
                <p>Difficulty : {{ Payload["difficulty"] }}</p>
                <p>Light : {{ Payload["light"] }}</p>
                <p>Recommended temperature : {{ Payload["temp"] }}</p>
                <p>Usage : {{ Payload["usage"] }}</p>
                <p>Usage : {{ $page.props.confirmState.state }}</p>
                <div class="mt-10">
                    <!-- T̶O̶D̶O̶:̶ C̶h̶e̶c̶k̶ t̶h̶e̶ u̶s̶e̶r̶ i̶f̶ i̶t̶s̶ r̶e̶g̶i̶s̶t̶e̶r̶,̶ i̶f̶ r̶e̶g̶i̶s̶t̶e̶r̶e̶d̶,̶ -->
                    <!-- T̶O̶D̶O̶:̶ I̶n̶s̶t̶e̶a̶d̶ u̶s̶i̶n̶g̶ B̶u̶t̶t̶o̶n̶,̶ u̶s̶e̶ L̶i̶n̶k̶ t̶o̶ A̶P̶I̶ t̶o̶ t̶h̶e̶ C̶o̶n̶t̶r̶o̶l̶l̶e̶r̶ f̶u̶n̶c̶t̶i̶o̶n̶ t̶o̶ i̶n̶s̶e̶r̶t̶ i̶s̶ F̶a̶v̶o̶r̶i̶t̶e̶d̶ t̶o̶ a̶n̶o̶t̶h̶e̶r̶ t̶a̶b̶l̶e̶  -->
                    <!-- T̶O̶D̶O̶:̶ T̶h̶e̶ t̶a̶b̶l̶e̶ i̶s̶ r̶e̶l̶a̶t̶i̶o̶n̶ b̶e̶t̶w̶e̶e̶n̶ t̶h̶e̶ p̶l̶a̶n̶t̶s̶,̶a̶l̶g̶a̶e̶,̶n̶u̶t̶d̶e̶f̶ a̶n̶d̶ U̶s̶e̶r̶ -->
                    <!-- TODO: Make an Alert box to indicate that offline user can save favorite by login. -->
                    <!-- TODO: If user decided not to, he still can be used as offline mode and save the favorite to cookies -->
                    <!-- TODO: Check the favorited items of signed in user and apply to button -->
                    <div v-if="isFavorite">
                        <button
                            @click="toggleFav(Payload['id'], Content)"
                            class="btn btn-outline btn-accent btn-active"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                height="1em"
                                viewBox="0 0 512 512"
                                class="fill-primary"
                            >
                                <path
                                    d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"
                                />
                            </svg>
                            Favourited
                        </button>
                    </div>
                    <div v-else>
                        <button
                            @click="toggleFav(Payload['id'], Content)"
                            class="btn btn-outline btn-accent"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                height="1em"
                                viewBox="0 0 512 512"
                                class="fill-accent"
                            >
                                <path
                                    d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"
                                />
                            </svg>
                            Favourite
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <p class="text-sm p-5">{{ Payload["body"] }}</p>
    </div>
</template>

<script>
import { onMounted, ref } from "vue";
// import { $ } from "jquery";
import VueCookies from "vue-cookies";
import Swal from "sweetalert2";
// import Swal from "sweetalert2/dist/sweetalert2.js";
// import { router } from "@inertiajs/vue3";
export default {
    props: ["Payload", "Content"],
    setup(props) {
        const isFavorite = ref(false);
        const Cookie = VueCookies.get("FavId");
        let confirmState = VueCookies.get("offlineState");

        // console.log(props.Content);
        // const token: ref('{{csrf_token()}}')

        onMounted(() => {
            // console.log("on Mounted");
            // console.log(Cookie);

            if (Cookie != null) {
                if (Cookie.includes(props.Payload["id"])) {
                    isFavorite.value = true;
                    // console.log(Cookie.length);
                } else if (Cookie.length <= 30) {
                    VueCookies.set("FavId", "");
                }
            } else {
                VueCookies.set("FavId", "");
            }
        });

        // console.log(props.Payload["name"]);
        return { isFavorite, confirmState };
    },
    methods: {
        toggleFav(id, content) {
            //Everytime button is clicked, change the value of the isFavorite to manipulate button style
            // console.log("Current Favourited ID = " + VueCookies.get("FavId"));
            let state = "";
            this.isFavorite = !this.isFavorite;
            const isLogin = VueCookies.get("userData");
            if (isLogin) {
                state = "online";
                this.saveFav(id, content, state);
            } else {
                state = "offline";
                this.saveFav(id, content, state);
            }
        },
        saveFav(id, content, state) {
            const currentCookies = [VueCookies.get("FavId")];
            let arrayCookies = [];
            //Check if the state of the user
            //if its offline then show an alert with the confirmation message that data is saved locally
            if (state == "offline") {
                if (!this.confirmState) {
                    Swal.fire({
                        title: "You are offline",
                        text: "Your data is saved locally, if you want to save your bookmarks online please login",
                        icon: "info",
                        reverseButtons: true,
                        showCancelButton: true,
                        cancelButtonColor: "#049806",
                        confirmButtonColor: "#0B1C11",
                        cancelButtonText: "Login",
                        confirmButtonText: "Stay offline",
                        allowOutsideClick: false,
                    }).then((result) => {
                        if (result["isConfirmed"]) {
                            // console.log("Confirmed");
                            // this.confirmState = "offline";
                            VueCookies.set("offlineState", "true");
                            location.reload();
                        } else {
                            this.$inertia.get(this.route("login"));
                        }
                    });
                }
            }
            //check if it is favorite
            if (this.isFavorite) {
                let favorite = true;
                //set the cookie to id passed
                arrayCookies.push(currentCookies);
                arrayCookies.push(id);
                VueCookies.set("FavId", decodeURI(arrayCookies));
                const fav = this.$inertia.post(
                    this.route("addfavDB", [content, id, favorite, state])
                );
                // console.log("UID : " + id + " Favourited");
            } else {
                let favorite = false;
                //if the favorite button pressed again it will remove the current id in the cookie
                //without removing all the cookies
                const removeCookies = currentCookies.toString();
                const removed = removeCookies.replace(id, "");
                VueCookies.set("FavId", decodeURI(removed));
                this.$inertia.post(
                    this.route("addfavDB", [content, id, favorite, state])
                );
                // console.log("UID : " + id + " UnFavorited");
            }
        },
    },
};
</script>

<style lang="scss" scoped>
@import "@sweetalert2/themes/dark/dark.scss";
</style>
