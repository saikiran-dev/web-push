<template>
    <div>
        <div class="flex items-center space-x-6 mb-8">
            <button
                type="submit"
                class="w-full flex justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                @click="takeToLogged(1)"
            >
                Login as 1
            </button>
            <button
                type="submit"
                class="w-full flex justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                @click="takeToLogged(2)"
            >
                Login as 2
            </button>
        </div>
        <label
            for="userid"
            class="block text-sm font-medium leading-6 text-gray-900"
            >Active with USER ID</label
        >
        <div class="my-2">
            <input
                id="userid"
                name="userid"
                required
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                v-model="userId"
            />
        </div>
        <div class="flex items-center space-x-6 mb-8">
            <button
                type="submit"
                class="w-full flex justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                @click="activateUser"
            >
                {{ "Activate User" }}
            </button>

            <button
                type="submit"
                class="w-full flex justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                @click="deactivateUser"
            >
                Deactivate User
            </button>
        </div>

        <div class="flex items-center">
            <label
                for="eventuser"
                class="text-sm mx-2 font-medium leading-6 text-gray-900"
                >Trigger Event for user id</label
            >

            <input
                id="eventuser"
                name="eventuser"
                required
                class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                v-model="triggerEventFor"
            />
        </div>
        <button
            type="submit"
            class="w-full flex justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm mt-4 font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            @click="trigerEvent"
        >
            Trigger Event
        </button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            userId: null,
            triggerEventFor: 1,
        };
    },
    methods: {
        async activateUser() {
            if (this.userId) {
                const jsonResponse = await fetch(
                    `http://127.0.0.1:8000/api/active-user/${this.userId}`
                );
            }
        },

        async deactivateUser() {
            if (this.userId) {
                const jsonResponse = await fetch(
                    `http://127.0.0.1:8000/api/deactive-user/${this.userId}`
                );
            }
        },
        takeToLogged(userId) {
            this.$router.push(`/loggedin/${userId}`);
        },
        async trigerEvent() {
            const jsonResponse = await fetch(
                `http://127.0.0.1:8000/api/send-notification/${this.triggerEventFor}`
            );
        },
    },
};
</script>
