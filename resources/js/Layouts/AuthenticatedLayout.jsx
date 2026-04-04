import Dropdown from '@/Components/Dropdown';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink';
import { Head, Link, usePage } from '@inertiajs/react';
import { useState } from 'react';

const navigationItems = [
    {
        label: 'Dashboard',
        href: 'dashboard',
        pattern: 'dashboard',
        icon: (
            <svg
                className="h-5 w-5"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                strokeWidth="1.8"
            >
                <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    d="M4.75 12.25h5.5v7h-5.5zm9-8.5h5.5v15.5h-5.5zm-9 4h5.5v2.5h-5.5z"
                />
            </svg>
        ),
    },
    {
        label: 'All Users',
        href: 'all.user',
        pattern: 'all.user',
        icon: (
            <svg
                className="h-5 w-5"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                strokeWidth="1.8"
            >
                <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    d="M16 19a4 4 0 0 0-8 0m12 0a4 4 0 0 0-6-3.465M4 19a4 4 0 0 1 6-3.465M15 7a3 3 0 1 1-6 0a3 3 0 0 1 6 0Zm6 3a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0ZM8 10a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0Z"
                />
            </svg>
        ),
    },
];

export default function AuthenticatedLayout({ header, children }) {
    const user = usePage().props.auth.user;
    const [showingNavigationDropdown, setShowingNavigationDropdown] =
        useState(false);

    return (
        <div className="min-h-screen bg-slate-100">
            <Head />

            <div className="flex min-h-screen flex-col lg:flex-row">
                <aside className="w-full border-b border-slate-200 bg-white lg:min-h-screen lg:w-80 lg:border-b-0 lg:border-r">
                    <div className="flex items-center justify-between px-5 py-5 lg:px-6">
                        <Link href="/" className="flex items-center gap-4">
                            <img
                                src="/assets/photo/logo-regular.png"
                                alt="AdMeter Pro"
                                className="h-full w-full object-contain"
                            />
                        </Link>

                        <button
                            type="button"
                            onClick={() =>
                                setShowingNavigationDropdown(
                                    (previousState) => !previousState,
                                )
                            }
                            className="inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white p-2 text-slate-500 shadow-sm transition hover:bg-slate-50 hover:text-slate-700 lg:hidden"
                        >
                            <svg
                                className="h-6 w-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    strokeLinecap="round"
                                    strokeLinejoin="round"
                                    strokeWidth="2"
                                    d={
                                        showingNavigationDropdown
                                            ? 'M6 18L18 6M6 6l12 12'
                                            : 'M4 6h16M4 12h16M4 18h16'
                                    }
                                />
                            </svg>
                        </button>
                    </div>

                    <div
                        className={`border-t border-slate-100 px-4 pb-5 pt-5 lg:block lg:border-t-0 lg:px-5 ${
                            showingNavigationDropdown ? 'block' : 'hidden'
                        }`}
                    >
                        <div className="space-y-2">
                            {navigationItems.map((item) => {
                                const active = route().current(item.pattern);

                                return (
                                    <Link
                                        key={item.label}
                                        href={route(item.href)}
                                        className={`group flex items-center gap-3 rounded-2xl px-4 py-3 text-[15px] font-semibold transition ${
                                            active
                                                ? 'bg-slate-800 text-white shadow-sm'
                                                : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900'
                                        }`}
                                    >
                                        <span
                                            className={`flex h-10 w-10 items-center justify-center rounded-xl transition ${
                                                active
                                                    ? 'bg-white/10 text-white'
                                                    : 'bg-slate-100 text-slate-500 group-hover:bg-white'
                                            }`}
                                        >
                                            {item.icon}
                                        </span>
                                        <span>{item.label}</span>
                                    </Link>
                                );
                            })}
                        </div>

                        <div className="mt-8 rounded-3xl border border-slate-200 bg-slate-50 p-4 lg:mt-10">
                            <p className="text-xs font-semibold uppercase tracking-[0.2em] text-slate-400">
                                Signed in as
                            </p>
                            <p className="mt-2 text-base font-semibold text-slate-900">
                                {user.name}
                            </p>
                            <p className="mt-1 break-all text-sm text-slate-500">
                                {user.email}
                            </p>

                            <div className="mt-4 hidden lg:block">
                                <Dropdown>
                                    <Dropdown.Trigger>
                                        <span className="inline-flex w-full rounded-2xl">
                                            <button
                                                type="button"
                                                className="inline-flex w-full items-center justify-between rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm font-medium text-slate-600 shadow-sm transition hover:border-slate-300 hover:text-slate-800 focus:outline-none"
                                            >
                                                Account
                                                <svg
                                                    className="h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                >
                                                    <path
                                                        fillRule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clipRule="evenodd"
                                                    />
                                                </svg>
                                            </button>
                                        </span>
                                    </Dropdown.Trigger>

                                    <Dropdown.Content>
                                        <Dropdown.Link
                                            href={route('profile.edit')}
                                        >
                                            Profile
                                        </Dropdown.Link>
                                        <Dropdown.Link
                                            href={route('logout')}
                                            method="post"
                                            as="button"
                                        >
                                            Log Out
                                        </Dropdown.Link>
                                    </Dropdown.Content>
                                </Dropdown>
                            </div>

                            <div className="mt-4 space-y-1 lg:hidden">
                                <ResponsiveNavLink href={route('profile.edit')}>
                                    Profile
                                </ResponsiveNavLink>
                                <ResponsiveNavLink
                                    method="post"
                                    href={route('logout')}
                                    as="button"
                                >
                                    Log Out
                                </ResponsiveNavLink>
                            </div>
                        </div>
                    </div>
                </aside>

                <div className="flex min-w-0 flex-1 flex-col">
                    <header className="border-b border-slate-200 bg-white">
                        <div className="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-5 sm:px-6 lg:px-8">
                            <div className="min-w-0">
                                {header ? (
                                    header
                                ) : (
                                    <h1 className="text-2xl font-semibold tracking-tight text-slate-900">
                                        Dashboard
                                    </h1>
                                )}
                            </div>

                            <div className="hidden items-center gap-3 lg:flex">
                                <div className="h-10 w-px bg-slate-200" />
                                <div className="text-right">
                                    <p className="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">
                                        Role
                                    </p>
                                    <p className="text-sm font-semibold text-slate-700">
                                        SUPER ADMIN
                                    </p>
                                </div>
                            </div>
                        </div>
                    </header>

                    <main className="flex-1 p-4 sm:p-6 lg:p-8">
                        <div className="mx-auto max-w-7xl">{children}</div>
                    </main>
                </div>
            </div>
        </div>
    );
}
