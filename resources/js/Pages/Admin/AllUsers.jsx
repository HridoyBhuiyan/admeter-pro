import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/react';

const statusClasses = {
    completed: 'bg-emerald-50 text-emerald-700 ring-1 ring-emerald-200',
    failed: 'bg-rose-50 text-rose-700 ring-1 ring-rose-200',
    pending: 'bg-amber-50 text-amber-700 ring-1 ring-amber-200',
    processing: 'bg-sky-50 text-sky-700 ring-1 ring-sky-200',
};

function formatBangladeshTime(value) {
    if (!value) {
        return 'N/A';
    }

    return new Intl.DateTimeFormat('en-BD', {
        dateStyle: 'medium',
        timeStyle: 'short',
        timeZone: 'Asia/Dhaka',
    }).format(new Date(value));
}

function buildWhatsAppUrl(value) {
    const digits = String(value || '').replace(/\D+/g, '');

    return digits ? `https://wa.me/${digits}` : null;
}

function fallback(value, empty = 'N/A') {
    return value || empty;
}

function statusClassName(status) {
    return (
        statusClasses[status] ||
        'bg-slate-100 text-slate-700 ring-1 ring-slate-200'
    );
}

export default function AllUsers({ clients }) {
    return (
        <AuthenticatedLayout
            header={
                <div>
                    <p className="text-sm font-medium text-slate-500">
                        Client Management
                    </p>
                    <h1 className="text-2xl font-semibold tracking-tight text-slate-900">
                        All Users
                    </h1>
                </div>
            }
        >
            <Head title="All Users" />

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
                            {clients.total} total client
                            {clients.total === 1 ? '' : 's'}
                        </div>
                    </div>

                    <div className="mt-6 overflow-hidden rounded-[24px] border border-slate-200">
                        <div className="overflow-x-auto">
                            <table className="min-w-[1500px] divide-y divide-slate-200 text-left">
                                <thead className="bg-slate-50">
                                    <tr className="text-xs font-semibold uppercase tracking-[0.18em] text-slate-500">
                                        <th className="px-3 py-3">Name</th>
                                        <th className="px-3 py-3">Brand Name</th>
                                        <th className="px-3 py-3">Status</th>
                                        <th className="px-3 py-3">Email</th>
                                        <th className="px-3 py-3">WhatsApp</th>
                                        <th className="px-3 py-3">IP Address</th>
                                        <th className="px-3 py-3">Last Activity</th>
                                        <th className="px-3 py-3">Location</th>
                                        <th className="px-3 py-3">User Agent</th>
                                    </tr>
                                </thead>

                                <tbody className="divide-y divide-slate-200 bg-white">
                                    {clients.data.length > 0 ? (
                                        clients.data.map((client) => (
                                            <tr
                                                key={client.id}
                                                className="align-top text-sm text-slate-700 transition hover:bg-slate-50/80"
                                            >
                                                <td className="px-3 py-3 flex font-semibold whitespace-nowrap text-slate-900">
                                                    <Link href={`/user-details/${client.id}`} className="flex items-center gap-2">
                                                    <img className={'w-3.5 mr-1 rounded-full'} src={`https://api.dicebear.com/7.x/initials/svg?seed=${client.name}`} />
                                                    <span>{fallback(client.name)}</span>
                                                    </Link>
                                                </td>
                                                <td className="px-3 py-3 whitespace-nowrap">
                                                        <a href={`${client.brand_slug}`} target={'_blank'} rel="noopener noreferrer">{fallback(client.brand_name)}</a>
                                                </td>
                                                <td className="px-3 whitespace-nowrap py-3">
                                                    <span className={`inline-flex rounded-full px-3 py-1 text-xs font-semibold ${client.trial
                                                        ? 'bg-emerald-50 text-emerald-700'
                                                        : 'bg-rose-50 text-rose-700'
                                                    }`}>
                                                        {client.trial ? 'Trial' : 'Regular'}
                                                    </span>
                                                    <span className={`inline-flex rounded-full px-3 py-1 text-xs font-semibold capitalize ${statusClassName(client.status)}`}>
                                                        {fallback(client.status)}
                                                    </span>
                                                </td>

                                                <td className="px-3 py-3 whitespace-nowrap">
                                                    <a
                                                        href={`mailto:${client.email}`}
                                                        className="text-sky-700  transition hover:text-sky-900 hover:underline"
                                                    >
                                                        {fallback(client.email)}
                                                    </a>
                                                </td>
                                                <td className="px-3 py-3 whitespace-nowrap">
                                                    {buildWhatsAppUrl(
                                                        client.whatsapp,
                                                    ) ? (
                                                        <a
                                                            href={buildWhatsAppUrl(
                                                                client.whatsapp,
                                                            )}
                                                            target="_blank"
                                                            rel="noreferrer"
                                                            className="inline-flex items-center gap-2 rounded-full bg-emerald-50 px-3 py-1.5 text-sm font-medium text-emerald-700 transition hover:bg-emerald-100"
                                                        >
                                                            <span className="h-2 w-2 rounded-full bg-emerald-500" />
                                                            {client.whatsapp}
                                                        </a>
                                                    ) : (
                                                        fallback(
                                                            client.whatsapp,
                                                        )
                                                    )}
                                                </td>
                                                <td className="px-3 py-3 whitespace-nowrap font-medium text-slate-600">
                                                    {fallback(
                                                        client.ip_address,
                                                    )}
                                                </td>
                                                <td className="px-3 py-3 whitespace-nowrap text-slate-600">
                                                    {formatBangladeshTime(
                                                        client.last_activity,
                                                    )}
                                                </td>

                                                <td className="px-3 whitespace-nowrap py-3">
                                                    {fallback(client.region)}, {fallback(client.city)}
                                                </td>
                                                <td className="max-w-xs whitespace-nowrap px-3 py-3 text-slate-500">
                                                    <p className="line-clamp-2">
                                                        {fallback(
                                                            client.user_agent,
                                                        )}
                                                    </p>
                                                </td>
                                            </tr>
                                        ))
                                    ) : (
                                        <tr>
                                            <td
                                                colSpan="13"
                                                className="px-6 py-16 text-center text-sm font-medium text-slate-500"
                                            >
                                                No clients found yet.
                                            </td>
                                        </tr>
                                    )}
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div className="mt-5 flex flex-col gap-3 border-t border-slate-200 pt-5 text-sm text-slate-500 sm:flex-row sm:items-center sm:justify-between">
                        <p>
                            Showing {clients.from ?? 0} to {clients.to ?? 0} of{' '}
                            {clients.total} entries
                        </p>

                        <div className="flex items-center gap-2">
                            {clients.links.map((link, index) => (
                                <Link
                                    key={`${link.label}-${index}`}
                                    href={link.url || '#'}
                                    dangerouslySetInnerHTML={{
                                        __html: link.label,
                                    }}
                                    className={`rounded-xl px-4 py-2 font-medium transition ${
                                        link.active
                                            ? 'bg-slate-800 text-white'
                                            : link.url
                                              ? 'bg-slate-100 text-slate-700 hover:bg-slate-200'
                                              : 'cursor-not-allowed bg-slate-100 text-slate-400'
                                    }`}
                                    preserveScroll
                                />
                            ))}
                        </div>
                    </div>
                </section>
            </div>
        </AuthenticatedLayout>
    );
}
