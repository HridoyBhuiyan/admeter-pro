import React from 'react';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.jsx";

function ClientDetails(props) {
    return (
        <AuthenticatedLayout
            header={
                <div>
                    <p className="text-sm font-medium text-slate-500">Client Details</p>
                    <h1 className="text-2xl font-semibold tracking-tight text-slate-900">All Users</h1>
                </div>}>


            <div className="space-y-6">
                <section className="rounded-[28px] border border-slate-200 bg-white p-5 shadow-sm sm:p-6">
                    <div className="flex flex-col gap-4 border-b border-slate-200 pb-5 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <p className="text-sm font-medium text-slate-500">
                                Admin / All Users
                            </p>
                            <h2 className="mt-1 text-xl font-semibold text-slate-900">
                                Client Directory
                            </h2>
                        </div>

                        <div className="rounded-2xl bg-slate-100 px-4 py-3 text-sm font-medium text-slate-600">
                            here
                        </div>
                    </div>
                </section>
            </div>






        </AuthenticatedLayout>
    );
}

export default ClientDetails;
