<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Components/Welcome.vue";
import UpdateProfileInformationForm from "@/Pages/Profile/Partials/UpdateProfileInformationForm.vue";
</script>
<style>
table,
td,
th {
    border: 1px solid;
}

table {
    width: 100%;
    border-collapse: collapse;
}
</style>

<template>
    <AppLayout title="CSR">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                CSR
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid grid-cols-3 gap-4">
                    <div class="...">
                        <p class="text-2xl ...">Customer Satisfaction Rating</p>
                        <p class="text-sm ...">
                            This Client Satisfaction Measurement (CSM) tracks
                            the customer experience of government offices. Your
                            feedback on your recently concluded transaction will
                            help this office provide a better service. Personal
                            information shared will be kept confidential and you
                            always have the option not to answer this form.
                        </p>
                    </div>
                    <div class="col-span-2 ...">
                        <div
                            class="bg-white overflow-hidden shadow-xl sm:rounded-lg"
                        >
                            <!-- <Welcome /> -->

                            <!-- <p class="text-2xl text-center font-bold">
                                CUSTOMER SATIFACTION RATING
                            </p> -->
                            <!-- <p class="text-xs text-center">
                                This Client Satisfaction Measurement (CSM) tracks the customer experience of government offices. Your feedback on your recently concluded transaction will help this office provide a better service. Personal information shared will be kept confidential and you always have the option not to answer this form.
                            </p> -->
                            <table>
                                <tr>
                                    <td colspan="5">
                                        <label class="text-sm" for="designation"
                                            >Customer Name:
                                        </label>
                                        <input
                                            style="
                                                border: none;
                                                height: 5px;
                                                width: 60%;
                                                border-bottom: 1px solid gray;
                                            "
                                            type="text"
                                            id="designation"
                                            name="designation"
                                        />
                                    </td>
                                    <td colspan="5">
                                        <label class="text-sm" for="srfno"
                                            >SRF No.:</label
                                        >
                                        <input
                                            type="text"
                                            style="
                                                border: none;
                                                height: 5px;
                                                width: auto;
                                                border-bottom: 1px solid gray;
                                            "
                                            name="srfno"
                                            id="srfno"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="9">
                                        <label for="srfno"
                                            >Designation/Position:</label
                                        >
                                        <input
                                            type="text"
                                            style="
                                                border: none;
                                                height: 5px;
                                                width: 56%;
                                                border-bottom: 1px solid gray;
                                            "
                                            name="srfno"
                                            id="srfno"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="9">
                                        <label class="text-sm" for="srfno"
                                            >Client type:</label
                                        >
                                        <input
                                            type="text"
                                            style="
                                                border: none;
                                                height: 5px;
                                                width: 70%;
                                                border-bottom: 1px solid gray;
                                            "
                                            name="srfno"
                                            id="srfno"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <label class="text-sm" for="srfno"
                                            >Date:</label
                                        >
                                        <input
                                            type="date"
                                            style="
                                                border: none;
                                                height: 5px;
                                                width: 70%;
                                                border-bottom: 1px solid gray;
                                            "
                                            name="srfno"
                                            id="srfno"
                                        />
                                    </td>
                                    <td colspan="3">
                                        <label class="text-sm" for="srfno"
                                            >Sex:</label
                                        >
                                        <input
                                            type="text"
                                            style="
                                                border: none;
                                                height: 5px;
                                                width: 70%;
                                                border-bottom: 1px solid gray;
                                            "
                                            name="srfno"
                                            id="srfno"
                                        />
                                    </td>
                                    <td colspan="3">
                                        <label class="text-sm" for="srfno"
                                            >Age:</label
                                        >
                                        <input
                                            type="number"
                                            style="
                                                border: none;
                                                height: 5px;
                                                width: 70%;
                                                border-bottom: 1px solid gray;
                                            "
                                            name="srfno"
                                            id="srfno"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <label class="text-sm" for="srfno"
                                            >Region of residence:</label
                                        >
                                        <input
                                            type="text"
                                            style="
                                                border: none;
                                                height: 5px;
                                                width: 60%;
                                                border-bottom: 1px solid gray;
                                            "
                                            name="srfno"
                                            id="srfno"
                                        />
                                    </td>
                                    <td colspan="6">
                                        <label class="text-sm" for="srfno"
                                            >Service Availed:</label
                                        >
                                        <input
                                            type="text"
                                            style="
                                                border: none;
                                                height: 5px;
                                                width: auto;
                                                border-bottom: 1px solid gray;
                                            "
                                            name="srfno"
                                            id="srfno"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <label class="text-sm" for="srfno"
                                            >Email Address:</label
                                        >
                                        <input
                                            type="text"
                                            style="
                                                border: none;
                                                height: 5px;
                                                width: 70%;
                                                border-bottom: 1px solid gray;
                                            "
                                            name="srfno"
                                            id="srfno"
                                        />
                                    </td>
                                    <td colspan="5">
                                        <label class="text-sm" for="srfno"
                                            >Telephone/Cellphone:</label
                                        >
                                        <input
                                            type="text"
                                            style="
                                                border: none;
                                                height: 5px;
                                                width: 55%;
                                                border-bottom: 1px solid gray;
                                            "
                                            name="srfno"
                                            id="srfno"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="text-sm"
                                        colspan="9"
                                        style="
                                            border-right: 1px solid white;
                                            border-left: 1px solid white;
                                        "
                                    >
                                        <h1>
                                            INSTRUCTIONS: Check mark (✔) your
                                            answer to the Citizen's Charter (CC)
                                            questions. The Citizen's Charter is
                                            an official document that reflects
                                            the services of a government
                                            agency/office including its
                                            requirements, fees, and processing
                                            times among others.
                                        </h1>
                                        <br />
                                        <h1>
                                            CC1 Which of the following best
                                            describes your awareness of a CC?
                                        </h1>
                                        <br />
                                        <br />
                                        <br />
                                        <br />
                                        <h1>
                                            CC2 If aware of CC (answered 1-3 in
                                            CC1), would you say that the CC of
                                            this office was ...?
                                        </h1>
                                        <br />
                                        <br />
                                        <br />
                                        <br />
                                        <h1>
                                            CC3 If aware of CC (answered codes
                                            1-3 in CC1), how much did the CC
                                            help you in your transaction?
                                        </h1>
                                        <br />
                                        <br />
                                        <br />
                                        <br />
                                        <br />
                                        <h1>INSTRUCTIONS:</h1>
                                        <p>
                                            For SQD 0-8, please put a check mark
                                            (✔) on the column that best
                                            corresponds to your answer.
                                        </p>
                                    </td>
                                </tr>
                                <tr class="text-sm">
                                    <td colspan="3"></td>
                                    <td>Strongly Disagree</td>
                                    <td>Disagree</td>
                                    <td>Neither Agree nor Disagree</td>
                                    <td>Agree</td>
                                    <td>Strongly Agree</td>
                                    <td>N/A</td>
                                </tr>
                                <tr class="text-sm">
                                    <td colspan="3">
                                        SQD0. I am satisfied with the service
                                        that I availed.
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                </tr>
                                <tr class="text-sm">
                                    <td colspan="3">
                                        SQD1. I spent a reasonable amount of
                                        time for my transaction.
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                </tr>
                                <tr class="text-sm">
                                    <td colspan="3">
                                        SQD2. The office followed the
                                        transaction’s requirements and steps
                                        based on the information provided.
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                </tr>
                                <tr class="text-sm">
                                    <td colspan="3">
                                        SQD3. The steps (including payment) I
                                        needed to do for my transaction were
                                        easy and simple.
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                </tr>
                                <tr class="text-sm">
                                    <td colspan="3">
                                        SQD4. I easily found information about
                                        my transaction from the office or its
                                        website.
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                </tr>
                                <tr class="text-sm">
                                    <td colspan="3">
                                        SQD5. I paid a reasonable amount of fees
                                        for my transaction. (If service was
                                        free, mark the “N/A” column)
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                </tr>
                                <tr class="text-sm">
                                    <td colspan="3">
                                        SQD6. I feel the office was fair to
                                        everyone, or “walang palakasan”, during
                                        my transaction.
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                </tr>
                                <tr class="text-sm">
                                    <td colspan="3">
                                        SQD7. I was treated courteously by the
                                        staff, and (if asked for help) the staff
                                        was helpful.
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                </tr>
                                <tr class="text-sm">
                                    <td colspan="3">
                                        SQD8. I got what I needed from the
                                        government office, or (if denied) denial
                                        of request was sufficiently explained to
                                        me.
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                    <td class="text-center">
                                        <input
                                            type="checkbox"
                                            id="vehicle1"
                                            name="vehicle1"
                                            value="Bike"
                                        />
                                    </td>
                                </tr>

                                <tr>
                                    <td
                                        class="text-sm"
                                        colspan="9"
                                        style="
                                            border-right: 1px solid white;
                                            border-left: 1px solid white;
                                            border-bottom: 1px solid white;
                                        "
                                    >
                                        <br />
                                        <p>
                                            Suggestions on how we can further
                                            improve our services (optional):
                                        </p>
                                        <h1><textarea class="underline" style="width: 100%; border: none;" name="" id=""></textarea></h1>
                                        <br />
                                        <br />
                                    </td>
                                </tr>
                            </table>
                            <p class="text-xs">NPC-006.F01</p>
                            <p class="text-xs">REV. NO. 4</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"></div>
        </div>
    </AppLayout>
</template>
