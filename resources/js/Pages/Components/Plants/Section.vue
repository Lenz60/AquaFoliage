<template>
    <div data-themes="foliage">
        <div
            class="flex flex-col bg-primary-focus text-neutral-focus h-screen w-full overflow-x-auto no-scrollbar"
        >
            <h3 class="p-5 text-2xl font-montserrat font-semibold">
                Plants Databases
            </h3>
            <div
                class="grid grid-cols-2 gap-x-6 gap-y-0.5 lg:gap-y-5 p-7 items-center w-fit h-full mb-3"
            >
                <Link
                    :href="route('plants')"
                    method="post"
                    :data="{ content: 'plants', excerpt: 'true' }"
                >
                    <div
                        class="card rounded-md lg:w-[400px] lg:h-fit md:w-[250px] md:h-[300px] hover:bg-neutral-900 hover:text-primary hover:-translate-y-1 hover:cursor-pointer"
                    >
                        <div class="flex-col">
                            <div class="flex justify-center items-center p-2">
                                <img
                                    src="/images/HydrocotylTripartita.jpg"
                                    class="rounded-md p-2"
                                />
                            </div>
                            <div class="p-1">
                                <div>
                                    <h2
                                        class="text-[20px] p-2 font-montserrat font-medium"
                                    >
                                        Plants Characteristics
                                    </h2>
                                </div>
                                <div>
                                    <p class="p-2 font-montserrat text-sm">
                                        Check certain plants characteristics and
                                        needs, like optimal temperatures, light
                                        needs, and plants growth rate.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </Link>
                <Link
                    :href="route('plants')"
                    method="post"
                    :data="{ content: 'nutDef', excerpt: 'true' }"
                >
                    <div
                        class="card rounded-md lg:w-[400px] lg:h-fit md:w-[250px] md:h-[300px] hover:bg-neutral-900 hover:text-primary hover:-translate-y-1 hover:cursor-pointer"
                    >
                        <div class="flex-col">
                            <div class="flex justify-center items-center p-2">
                                <img
                                    src="/images/MeltingPlants.jpg"
                                    class="rounded-md p-2"
                                />
                            </div>
                            <div>
                                <h2
                                    class="text-[20px] p-2 font-montserrat font-medium"
                                >
                                    Nutrient Deficiencies
                                </h2>
                            </div>
                            <div>
                                <p class="p-2 font-montserrat text-sm">
                                    Check the causes of your dying plants and
                                    gives the solution for the problem.
                                </p>
                            </div>
                        </div>
                    </div>
                </Link>
                <Link
                    :href="route('plants')"
                    method="post"
                    :data="{ content: 'algae', excerpt: 'true' }"
                >
                    <div
                        class="card rounded-md lg:w-[400px] lg:h-fit md:w-[250px] md:h-[300px] hover:bg-neutral-900 hover:text-primary hover:-translate-y-1 hover:cursor-pointer"
                    >
                        <div class="flex-col">
                            <div class="flex justify-center items-center p-2">
                                <img
                                    src="/images/BlackBeard.jpg"
                                    class="rounded-md p-2"
                                />
                            </div>
                            <div>
                                <h2
                                    class="text-[20px] p-2 font-montserrat font-medium"
                                >
                                    Algae Characteristics
                                </h2>
                            </div>
                            <div>
                                <p class="p-2 font-montserrat text-sm">
                                    Check certain algae characteristics, what
                                    causes it to appear and how to remove and
                                    prevents it for come back.
                                </p>
                            </div>
                        </div>
                    </div>
                </Link>
            </div>
        </div>
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

<style scoped>
/* Hide scrollbar for Chrome, Safari and Opera */
.no-scrollbar::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.no-scrollbar {
    -ms-overflow-style: none; /* IE and Edge */
    scrollbar-width: none; /* Firefox */
}
</style>
