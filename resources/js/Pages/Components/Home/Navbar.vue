<template>
    <div data-themes="foliage">
        <header class="navbar bg-base-200 w-screen">
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
                            class="btn btn-square drawer-button"
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
                                <li>
                                    <Link :href="route('plants')">
                                        <a>Plants Databases</a>
                                    </Link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1">
                <a href="/">
                    <img
                        src="/images/logo.png"
                        alt=""
                        class="btn rounded-md btn-ghost normal-case invisible xl:visible md:visible sm:invisible"
                    />
                </a>
            </div>
            <div v-if="!NoAuthLink" class="px-5">
                <div
                    v-if="$page.props.auth.user?.name"
                    class="menu flex-row-reverse"
                >
                    <div class="flex">
                        <ul class="menu menu-horizontal px-1">
                            <li>
                                <details class="text-primary">
                                    <summary>
                                        <p
                                            class="text-md font-semibold font-montserrat px-2 break-words"
                                        >
                                            {{ $page.props.auth.user.name }}
                                        </p>
                                    </summary>
                                    <ul
                                        class="flex flex-col bg-base-200 bg-opacity-70 w-full rounded-md text-center justify-center"
                                    >
                                        <li>
                                            <Link
                                                :href="route('dashboard')"
                                                method="get"
                                            >
                                                <p class="text-sm text-center">
                                                    Dashboard
                                                </p>
                                            </Link>
                                        </li>
                                        <li>
                                            <Link
                                                :href="route('dashboard.admin')"
                                                method="get"
                                            >
                                                <p class="text-sm text-center">
                                                    Dashboard Admin
                                                </p>
                                            </Link>
                                        </li>
                                        <li>
                                            <Link
                                                :href="route('profile.edit')"
                                                method="get"
                                            >
                                                <p class="text-sm text-center">
                                                    Profile
                                                </p>
                                            </Link>
                                        </li>
                                        <li>
                                            <Link
                                                :href="route('logout')"
                                                method="post"
                                            >
                                                <p class="text-sm text-center">
                                                    Log out
                                                </p>
                                            </Link>
                                        </li>
                                    </ul>
                                </details>
                            </li>
                        </ul>
                    </div>
                </div>
                <div v-else>
                    <Link :href="route('login')">
                        <p class="btn btn-ghost">Sign in</p>
                    </Link>
                </div>
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
    props: {
        NoAuthLink: Object,
    },
    setup(props) {
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
