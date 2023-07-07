<template>
    <div data-themes="foliage">
        <div
            class="flex flex-col border-2 h-screen border-yellow-300 overflow-auto"
        >
            <h3 class="p-5 text-2xl font-montserrat font-semibold text-primary">
                Plants Databases
            </h3>
            <div
                class="grid grid-cols-2 gap-x-6 gap-y-12 p-7 items-center w-fit h-full"
            >
                <div
                    class="card rounded-md hover:bg-neutral-900 hover:-translate-y-1 hover:cursor-pointer"
                >
                    <div class="flex-col w-[400px] h-[350px]">
                        <div class="flex justify-center items-center p-2">
                            <img
                                src="/images/HydrocotylTripartita.jpg"
                                class="rounded-md justify-center items-center"
                            />
                        </div>
                        <div>
                            <h2
                                class="text-[20px] p-2 text-primary font-montserrat font-medium"
                            >
                                Plants Characteristics
                            </h2>
                        </div>
                        <div>
                            <p class="p-2 font-montserrat text-sm">
                                Check certain plants characteristics and needs,
                                like optimal temperatures, light needs, and
                                plants growth rate.
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="card rounded-md hover:bg-neutral-900 hover:-translate-y-1 hover:cursor-pointer"
                >
                    <div class="flex-col w-[400px] h-[350px]">
                        <div class="flex justify-center items-center p-2">
                            <img
                                src="/images/MeltingPlants.jpg"
                                class="rounded-md justify-center items-center"
                            />
                        </div>
                        <div>
                            <h2
                                class="text-[20px] p-2 text-primary font-montserrat font-medium"
                            >
                                Nutrient Deficiencies
                            </h2>
                        </div>
                        <div>
                            <p class="p-2 font-montserrat text-sm">
                                Check the causes of your dying plants and gives
                                the solution for the problem.
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="card rounded-md hover:bg-neutral-900 hover:-translate-y-1 hover:cursor-pointer"
                >
                    <div class="flex-col w-[400px] h-[350px]">
                        <div class="flex justify-center items-center p-2">
                            <img
                                src="/images/BlackBeard.jpg"
                                class="rounded-md justify-center items-center"
                            />
                        </div>
                        <div>
                            <h2
                                class="text-[20px] p-2 text-primary font-montserrat font-medium"
                            >
                                Algae Characteristics
                            </h2>
                        </div>
                        <div>
                            <p class="p-2 font-montserrat text-sm">
                                Check certain algae characteristics, what causes
                                it to appear and how to remove and prevents it
                                for come back.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    setup() {
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
