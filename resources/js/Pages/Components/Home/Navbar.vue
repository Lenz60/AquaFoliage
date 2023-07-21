<template>
    <div data-themes="foliage">
        <header class="navbar bg-base-200">
            <div class="flex-none">
                <div class="drawer">
                    <input
                        id="my-drawer"
                        type="checkbox"
                        class="drawer-toggle"
                    />
                    <div class="drawer-content">
                        <!-- Page content here -->
                        <label
                            for="my-drawer"
                            class="btn btn-square btn-ghost drawer-button"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                class="inline-block w-5 h-5 stroke-current"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"
                                ></path>
                            </svg>
                        </label>
                    </div>
                    <div class="drawer-side">
                        <label for="my-drawer" class="drawer-overlay"></label>
                        <div
                            class="menu h-full w-80 bg-base-200 text-base-content"
                        >
                            <div>
                                <img
                                    src="/images/logo.png"
                                    class="btn rounded-md btn-ghost normal-case"
                                />
                            </div>
                            <ul
                                class="menu p-5 text-primary text-base font-normal font-montserrat"
                            >
                                <li><a>Plants Databases</a></li>
                                <li><a>Algae Databases</a></li>
                                <li><a>Plants Health</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1">
                <Link href="/">
                    <img
                        src="/images/logo.png"
                        alt=""
                        class="btn rounded-md btn-ghost normal-case"
                    />
                </Link>
                <!-- <a class="btn rounded-md btn-ghost normal-case text-xl"
                    >AquaFolliage</a
                > -->
            </div>
        </header>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
export default {
    components: {
        Link,
    },
    setup() {
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
