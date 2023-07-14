<template>
    <div>
        <h3 class="text-primary font-montserrat font-semibold text-xl p-5">
            {{ Payload["name"] }}
        </h3>
        <div class="flex p-5">
            <div>
                <img
                    src="https://pbs.twimg.com/profile_images/1289815343892819969/zIk4dt2E_400x400.jpg"
                    class="w-[200px] h-[200px]"
                />
            </div>
            <div class="text-primary font-montserrat text-sm p-5 ml-[10%]">
                <p>Difficulty : {{ Payload["difficulty"] }}</p>
                <p>Causes : {{ Payload["causes"] }}</p>
            </div>
        </div>

        <p class="text-md text-primary font-montserrat pl-5">
            What the cause ?
        </p>
        <p class="text-primary text-sm p-5">{{ Payload["causes_desc"] }}</p>
        <p class="text-primary text-sm p-5">{{ Payload["body"] }}</p>
    </div>
</template>

<script>
export default {
    props: ["Payload"],
    setup() {
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
