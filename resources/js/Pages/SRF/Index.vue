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
    <AppLayout title="SRF">
        
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                SRF
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid grid-cols-3 gap-4">
                    <div class="...">
                        <p class="text-2xl ...">Service Request Form</p>
                        <p class="text-sm ...">Create a digital copy of SRF.</p>
                    </div>
                    <div class="col-span-2 ...">
                        <div
                            class="bg-white overflow-hidden shadow-xl sm:rounded-lg"
                        >
                            <!-- <Welcome /> -->

                            <!-- <p class="text-2xl text-center font-bold">
                                NATIONAL POWER CORPORATION
                            </p>
                            <p class="text-2xl text-center font-bold">
                                INFORMATION TECHNOLOGY SERVICES DEPARTMENT
                            </p> -->
                            <table >
                                <tr>
                                    <th colspan="6">
                                        <p
                                            class="text-1xl text-center font-bold"
                                        >
                                            SERVICE REQUEST FORM - IS
                                        </p>
                                    </th>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <label class="text-sm" for="designation">Requesting Dept. / Div.: </label>
                                        <input style="border: none; height: 5px; width:60%; border-bottom: 1px solid gray;" type="text" id="designation" name="designation">
                                    </td>
                                    <td colspan="2">
                                        <label class="text-sm" for="srfno">SRF No.:</label>
                                        <input type="text" style="border: none; height: 5px; width: 40%; border-bottom: 1px solid gray;" name="srfno" id="srfno">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label for="srfno">Date Prepared:</label>
                                        <input type="date" style="border: none; height: 5px; width: 56%; border-bottom: 1px solid gray;" name="srfno" id="srfno">
                                    </td>
                                    <td colspan="2">

                                        <label class="text-sm" for="srfno">Agreed Completion Date:</label>
                                        <input type="date" style="border: none; height: 5px; width: 46%; border-bottom: 1px solid gray;" name="srfno" id="srfno">
                                    </td>
                                    <td colspan="2">
                                        <label class="text-sm" for="srfno">Date Received:</label>
                                        <input type="date" style="border: none; height: 5px; width: 56%; border-bottom: 1px solid gray;" name="srfno" id="srfno">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        <label class="text-sm" for="srfno">System / Module:</label>
                                        <input type="text" style="border: none; height: 5px; width: 70%; border-bottom: 1px solid gray;" name="srfno" id="srfno">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        <h1>
                                            A. Purpose/Justification & Details
                                            of Requirement
                                        </h1>
                                        <h1><textarea style="width: 100%; border: none;" name="" id=""></textarea></h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <h1>Requested by:</h1>
                                        <br />
                                        <h1 class="text-center">
                                            <input type="text" style="border: none; height: 5px; width: auto; border-bottom: 1px solid gray;" name="srfno" id="srfno">
                                        </h1>
                                        <h1 class="text-center text-sm">
                                            Signature Over Printed Name
                                        </h1>
                                    </td>
                                    <td colspan="2">
                                        <h1>Noted by:</h1>
                                        <br />
                                        <h1 class="text-center">
                                            <input type="text" style="border: none; height: 5px; width: auto; border-bottom: 1px solid gray;" name="srfno" id="srfno">
                                        </h1>
                                        <h1 class="text-center text-sm">
                                            Signature Over Printed Name
                                        </h1>
                                    </td>
                                    <td colspan="2">
                                        <h1>Received by:</h1>
                                        <br />
                                        <h1 class="text-center">
                                            <input type="text" style="border: none; height: 5px; width: auto; border-bottom: 1px solid gray;" name="srfno" id="srfno">
                                        </h1>
                                        <h1 class="text-center text-sm">
                                            Signature Over Printed Name
                                        </h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        B. Evaluation of Service Request (By
                                        ITSD Personnel)
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        colspan="3"
                                        style="border-right: 1px solid white"
                                    >
                                        <h1>Classification of Request:</h1>
                                        <br />
                                        <h1>Action Taken:</h1>
                                        <h1>
                                            Assign To:
                                            <input type="text" style="border: none; height: 5px; width: auto; border-bottom: 1px solid gray;" name="srfno" id="srfno">
                                        </h1>
                                        <h1>
                                            Instruction:
                                            <input type="text" style="border: none; height: 5px; width: auto; border-bottom: 1px solid gray;" name="srfno" id="srfno">
                                        </h1>
                                        <h1>
                                            Remarks:__________________________________
                                        </h1>
                                        <h1>
                                            ___________________________________________
                                        </h1>
                                        <h1>
                                            ___________________________________________
                                        </h1>
                                        <h1>
                                            ___________________________________________
                                        </h1>
                                        <h1>
                                            ___________________________________________
                                        </h1>
                                        <br />
                                        <h1 class="text-center">
                                            <input type="text" style="border: none; height: 5px; width: auto; border-bottom: 1px solid gray;" name="srfno" id="srfno">
                                        </h1>
                                        <h1 class="text-center">
                                            ITSD Personnel
                                        </h1>
                                    </td>
                                    <td colspan="3">
                                        <br>
                                        <br>
                                        <br>
                                        <h1>
                                            Reason for
                                            Disapproval:________________
                                        </h1>
                                        <h1>________________________________________</h1>
                                        <h1>________________________________________</h1>
                                        <h1>________________________________________</h1>
                                        <h1>________________________________________</h1>
                                        <h1>________________________________________</h1>
                                        <h1>________________________________________</h1>
                                        <br />
                                        <h1 class="text-center">
                                            <input type="text" style="border: none; height: 5px; width: auto; border-bottom: 1px solid gray;" name="srfno" id="srfno">
                                        </h1>
                                        <h1 class="text-center">
                                            Manager, ITSD
                                        </h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        C. Agreement/s with Requesting Client /
                                        End-User (Please use additional sheet,
                                        if necessary)
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <p class="underline font-bold">
                                            D. Service Completion Details
                                        </p>
                                        <h1>Date Accomplished:</h1>
                                        <h1>
                                            Service/s Rendered / Outputs
                                            Provided
                                        </h1>
                                        <br />
                                        <br />
                                        <br />
                                        <h1>Remarks, if any:</h1>
                                        <br />
                                        <h1 class="text-center">
                                            <input type="text" style="border: none; height: 5px; width: auto; border-bottom: 1px solid gray;" name="srfno" id="srfno">
                                        </h1>
                                        <h1 class="text-center">
                                            ITSD Personnel
                                        </h1>
                                    </td>
                                    <td colspan="3">
                                        <h1 class="underline font-bold">
                                            E. End-User Acceptance
                                        </h1>
                                        <h1>Date Accomplished:</h1>
                                        <h1>
                                            Assessment of Service/s Provided
                                        </h1>
                                        <br />
                                        <br />
                                        <br />
                                        <h1>Remarks, if any:</h1>
                                        <br />
                                        <h1 class="text-center">
                                            <input type="text" style="border: none; height: 5px; width: auto; border-bottom: 1px solid gray;" name="srfno" id="srfno">
                                        </h1>
                                        <h1 class="text-center">
                                            Printed Name & Signature
                                        </h1>
                                    </td>
                                </tr>
                            </table>
                            <p class="text-xs">CAG-ITS-007.F01</p>
                            <p class="text-xs">REV. NO. 0</p>
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



