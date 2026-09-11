@extends('layouts.app')

@section('title', 'Hearth & Harbor | Make every stay feel like home')

@section('content')
    <x-hero />

    <section id="features" class="bg-stone-50 px-6 py-20 sm:py-24 lg:px-8 lg:py-28">
        <div class="mx-auto max-w-7xl">
            <div class="max-w-2xl">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-amber-700">Everything in one place</p>
                <h2 class="mt-4 text-4xl font-semibold tracking-tight text-stone-950 sm:text-5xl">The thoughtful details behind a better stay.</h2>
                <p class="mt-5 text-lg leading-8 text-stone-600">Simple tools that give your team more time to focus on the people who walk through your doors.</p>
            </div>

            <div class="mt-12 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <x-feature-card icon="calendar" title="Effortless reservations" description="Keep every booking organized with a clear calendar built for busy independent properties." />
                <x-feature-card icon="users" title="Guest profiles" description="Remember preferences and important details so every welcome feels personal." />
                <x-feature-card icon="chart" title="Steady growth insights" description="See occupancy, revenue, and booking trends at a glance with simple reports." />
                <x-feature-card icon="chat" title="Warm communication" description="Send timely, polished messages before, during, and after every stay." />
                <x-feature-card icon="shield" title="Secure by design" description="Protect guest information with dependable tools and privacy-minded workflows." />
                <x-feature-card icon="sparkles" title="Memorable touches" description="Create repeatable moments of delight that turn first-time guests into regulars." />
            </div>
        </div>
    </section>

    <section id="showcase" class="bg-[#fffaf5] px-6 py-20 sm:py-24 lg:px-8 lg:py-28">
        <div class="mx-auto grid max-w-7xl items-center gap-14 lg:grid-cols-7 lg:gap-20">
            <div class="lg:col-span-4">
                <div class="grid grid-cols-1 items-end gap-6 sm:grid-cols-5">
                    <div class="sm:col-span-4">
                        <div class="overflow-hidden rounded-2xl border border-stone-200 bg-white p-2 shadow-xl shadow-stone-900/10 sm:p-3">
                            <img src="https://placehold.co/1200x820/f3e2cf/8a5a44?text=Hearth+%26+Harbor+Web+Dashboard" alt="Hearth & Harbor web dashboard mockup" class="aspect-[12/8] w-full rounded-xl object-cover" />
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <div class="mx-auto max-w-[220px] overflow-hidden rounded-[1.75rem] border-4 border-stone-800 bg-stone-800 shadow-xl shadow-stone-900/20 sm:max-w-none">
                            <img src="https://placehold.co/500x900/e8c9a8/6f4636?text=Mobile+Guest+App" alt="Hearth & Harbor mobile guest app mockup" class="aspect-[5/9] w-full object-cover" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-3">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-amber-700">Product showcase</p>
                <h2 class="mt-4 text-4xl font-semibold tracking-tight text-stone-950 sm:text-5xl">A clearer view of every guest journey.</h2>
                <p class="mt-5 text-lg leading-8 text-stone-600">From the first reservation to the final thank-you, Hearth &amp; Harbor keeps the whole experience close at hand.</p>

                <ul class="mt-8 space-y-5" aria-label="Key product highlights">
                    <li class="flex gap-4">
                        <span class="mt-1 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-amber-100 text-amber-700" aria-hidden="true">&#10003;</span>
                        <div>
                            <h3 class="font-semibold text-stone-900">Real-time availability</h3>
                            <p class="mt-1 text-sm leading-6 text-stone-600">Know what is open, occupied, and arriving without switching views.</p>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <span class="mt-1 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-amber-100 text-amber-700" aria-hidden="true">&#10003;</span>
                        <div>
                            <h3 class="font-semibold text-stone-900">Easy online booking</h3>
                            <p class="mt-1 text-sm leading-6 text-stone-600">Give guests a simple, welcoming path from discovery to confirmation.</p>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <span class="mt-1 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-amber-100 text-amber-700" aria-hidden="true">&#10003;</span>
                        <div>
                            <h3 class="font-semibold text-stone-900">Personal guest notes</h3>
                            <p class="mt-1 text-sm leading-6 text-stone-600">Keep preferences and requests visible so thoughtful service comes naturally.</p>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <span class="mt-1 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-amber-100 text-amber-700" aria-hidden="true">&#10003;</span>
                        <div>
                            <h3 class="font-semibold text-stone-900">Calm team workflows</h3>
                            <p class="mt-1 text-sm leading-6 text-stone-600">Make handoffs effortless with one shared source of truth for your team.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="pricing" class="bg-stone-50 px-6 py-20 sm:py-24 lg:px-8 lg:py-28">
        <div class="mx-auto max-w-7xl">
            <div class="mx-auto max-w-2xl text-center">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-amber-700">Simple, thoughtful pricing</p>
                <h2 class="mt-4 text-4xl font-semibold tracking-tight text-stone-950 sm:text-5xl">The right fit for your kind of welcome.</h2>
                <p class="mt-5 text-lg leading-8 text-stone-600">Start with what you need today and grow into more thoughtful service as your property does.</p>
            </div>

            <div class="mx-auto mt-12 grid max-w-6xl grid-cols-1 gap-6 lg:grid-cols-3 lg:items-center">
                <x-pricing-card plan-name="Basic" price="$39" :features="[
                    'Up to 25 rooms or suites',
                    'Online booking calendar',
                    'Guest profiles and notes',
                    'Email support',
                    'Monthly performance summary',
                ]" cta-text="Start with Basic" />

                <x-pricing-card plan-name="Signature" price="$89" :is-featured="true" :features="[
                    'Up to 75 rooms or suites',
                    'Everything in Basic',
                    'Automated guest messages',
                    'Live occupancy insights',
                    'Priority support',
                ]" cta-text="Choose Signature" />

                <x-pricing-card plan-name="Estate" price="$159" :features="[
                    'Unlimited rooms or suites',
                    'Everything in Signature',
                    'Multi-property reporting',
                    'Custom guest experiences',
                    'Dedicated success partner',
                ]" cta-text="Choose Estate" />
            </div>
        </div>
    </section>

    <section id="testimonials" class="bg-[#fffaf5] px-6 py-20 sm:py-24 lg:px-8 lg:py-28">
        <div class="mx-auto max-w-7xl">
            <div class="mx-auto max-w-2xl text-center">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-amber-700">Good stays, shared</p>
                <h2 class="mt-4 text-4xl font-semibold tracking-tight text-stone-950 sm:text-5xl">Loved by thoughtful hosts.</h2>
                <p class="mt-5 text-lg leading-8 text-stone-600">See why independent properties choose Hearth &amp; Harbor to make every guest feel remembered.</p>
            </div>

            <div class="mt-12 grid grid-cols-1 gap-6 lg:grid-cols-3">
                <x-testimonial-card
                    photo="https://i.pravatar.cc/150?img=47"
                    name="Maya Thompson"
                    position="Owner, The Juniper House"
                    review="Hearth & Harbor gave us the calm, clear view of our bookings we had been missing. Our team spends less time updating spreadsheets and more time welcoming guests."
                />
                <x-testimonial-card
                    photo="https://i.pravatar.cc/150?img=12"
                    name="Daniel Ruiz"
                    position="General Manager, Cedar Lane Inn"
                    review="The guest notes are a small feature that makes a huge difference. We can remember the details that turn a pleasant stay into a return visit."
                />
                <x-testimonial-card
                    photo="https://i.pravatar.cc/150?img=32"
                    name="Olivia Chen"
                    position="Host, Harborlight Cottages"
                    review="We were up and running in an afternoon, and our guests immediately found the booking experience easier. It feels like the system was made for our kind of property."
                />
            </div>
        </div>
    </section>

    <section id="get-started" class="bg-gradient-to-br from-amber-800 via-amber-700 to-stone-900 px-6 py-20 text-white sm:py-24 lg:px-8 lg:py-28">
        <div class="mx-auto flex max-w-5xl flex-col items-center justify-between gap-8 text-center sm:flex-row sm:text-left">
            <div class="max-w-2xl">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-amber-200">Your next chapter starts here</p>
                <h2 class="mt-4 text-4xl font-semibold tracking-tight sm:text-5xl">Give every guest a reason to come back.</h2>
                <p class="mt-5 max-w-xl text-lg leading-8 text-amber-50/85">Start your free trial today and see how much more welcoming your daily operations can feel.</p>
            </div>
            <x-button href="#contact" variant="secondary" size="lg" class="shrink-0 bg-white text-amber-800 hover:bg-amber-50">Start Free Trial</x-button>
        </div>
    </section>
@endsection
