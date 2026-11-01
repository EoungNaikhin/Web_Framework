<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Report an issue – TechNews</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@500;700;800&family=Public+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --bg: #ffffff;
            --surface: #f5f7fb;
            --ink: #131a2b;
            --muted: #5b6479;
            --line: #e3e7ef;
            --accent: #2347ff;
            --accent-ink: #ffffff;
            --ok: #0a7a4b;
            --err: #c23a3a;
            color-scheme: light;
            --head: "Bricolage Grotesque", "Segoe UI", system-ui, sans-serif;
            --body: "Public Sans", "Segoe UI", system-ui, sans-serif;
            box-sizing: border-box;
            padding-top: env(safe-area-inset-top, 0px);
            padding-bottom: env(safe-area-inset-bottom, 0px);
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--ink);
            font: 400 17px/1.65 var(--body)
        }

        a {
            color: inherit;
            text-decoration: none
        }

        :focus-visible {
            outline: 3px solid var(--accent);
            outline-offset: 3px;
            border-radius: 6px
        }

        .wrap {
            max-width: 1080px;
            margin: 0 auto;
            padding: 0 24px
        }

        h1,
        h2,
        h3 {
            font-family: var(--head);
            line-height: 1.1;
            margin: 0;
            letter-spacing: -.02em
        }

        /* Header */
        header {
            position: sticky;
            top: env(safe-area-inset-top, 0px);
            z-index: 5;
            background: var(--bg);
            border-bottom: 1px solid var(--line)
        }

        .bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 64px
        }

        .logo {
            font: 800 22px var(--head);
            letter-spacing: -.03em
        }

        .logo span {
            color: var(--accent)
        }

        nav {
            display: flex;
            align-items: center;
            gap: 28px;
            font-size: 15px;
            color: var(--muted)
        }

        nav a:hover {
            color: var(--ink)
        }

        nav .btn {
            padding: 9px 16px
        }

        nav .btn.ghost[aria-current="page"] {
            background: var(--surface)
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            white-space: nowrap;
            border: 0;
            cursor: pointer;
            font: 600 15px var(--body);
            padding: 12px 20px;
            border-radius: 10px;
            background: var(--accent);
            color: var(--accent-ink)
        }

        .btn:hover {
            filter: brightness(1.08)
        }

        .btn.ghost {
            background: transparent;
            color: var(--ink);
            border: 1px solid var(--line)
        }

        .btn.ghost:hover {
            background: var(--surface);
            filter: none
        }

        /* Hero */
        .hero {
            padding: 88px 0 56px;
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 56px;
            align-items: center
        }

        .hero h1 {
            font-size: clamp(40px, 6vw, 68px);
            font-weight: 800
        }

        .hero p.lead {
            font-size: 19px;
            color: var(--muted);
            max-width: 30em;
            margin: 22px 0 32px
        }

        /* Info card (same look as "Top stories today") */
        .today {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 8px 24px
        }

        .today h2 {
            font-size: 15px;
            font-weight: 700;
            color: var(--muted);
            padding: 16px 0 4px;
            letter-spacing: 0
        }

        .today .item {
            display: block;
            padding: 16px 0;
            border-top: 1px solid var(--line)
        }

        .today h2+.item {
            border-top: 0
        }

        .today b {
            display: block;
            font: 700 18px/1.3 var(--head)
        }

        .today small {
            color: var(--muted);
            font-size: 14px
        }

        /* Form section */
        section {
            padding: 56px 0 72px
        }

        .head {
            margin-bottom: 32px
        }

        .head h2 {
            font-size: clamp(28px, 4vw, 40px);
            font-weight: 700
        }

        .head p {
            color: var(--muted);
            margin: 10px 0 0
        }

        .report-form {
            max-width: 720px;
            margin: 0 auto;
            border: 1px solid var(--line);
            border-radius: 16px;
            background: var(--bg);
            padding: 32px;
            display: grid;
            gap: 24px
        }

        .field {
            display: grid;
            gap: 8px;
            border: 0;
            padding: 0;
            margin: 0;
            min-width: 0
        }

        .field>label,
        .field>legend {
            font: 700 15px var(--head);
            margin: 10px;
            padding: 0
        }

        .field .hint {
            font-weight: 400;
            color: var(--muted)
        }

        .field input[type="text"],
        .field input[type="email"],
        .field input[type="url"],
        .field textarea {
            width: 100%;
            font: 400 16px var(--body);
            padding: 12px 14px;
            border: 1px solid var(--line);
            border-radius: 10px;
            background: var(--bg);
            color: var(--ink)
        }

        .field textarea {
            min-height: 150px;
            resize: vertical;
            line-height: 1.5
        }

        .field input.invalid,
        .field textarea.invalid {
            border-color: var(--err)
        }

        .error {
            color: var(--err);
            font-size: 14px;
            margin: 0;
            min-height: 0
        }

        /* Radio buttons styled like the topic chips */
        .opts {
            display: flex;
            gap: 8px;
            flex-wrap: wrap
        }

        .opts input {
            position: absolute;
            opacity: 0;
            pointer-events: none
        }

        .opts label {
            font: 500 14px var(--body);
            padding: 8px 16px;
            border-radius: 999px;
            border: 1px solid var(--line);
            background: var(--bg);
            color: var(--muted);
            cursor: pointer
        }

        .opts label:hover {
            color: var(--ink)
        }

        .opts input:checked+label {
            background: var(--ink);
            border-color: var(--ink);
            color: var(--bg)
        }

        .opts input:focus-visible+label {
            outline: 3px solid var(--accent);
            outline-offset: 3px
        }

        .actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap
        }

        .note {
            font-size: 14px;
            color: var(--muted);
            margin: 0;
            min-height: 1.6em
        }

        .note.ok {
            color: var(--ok)
        }

        .note.err {
            color: var(--err)
        }

        /* Why */
        .why {
            background: var(--surface);
            border-block: 1px solid var(--line);
            padding: 72px 0
        }

        .why .cols {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px
        }

        .why h3 {
            font-size: 21px;
            margin-bottom: 8px
        }

        .why p {
            margin: 0;
            color: var(--muted);
            font-size: 16px
        }

        footer {
            border-top: 1px solid var(--line);
            padding: 32px 0;
            font-size: 14px;
            color: var(--muted)
        }

        footer .wrap {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            flex-wrap: wrap
        }

        @media (max-width:860px) {
            .hero {
                grid-template-columns: 1fr;
                padding-top: 56px
            }

            .why .cols {
                grid-template-columns: 1fr
            }

            .report-form {
                padding: 24px 20px
            }

            nav a:not(.btn) {
                display: none
            }

            nav {
                gap: 10px
            }
        }

        @media (prefers-reduced-motion:no-preference) {

            .hero h1,
            .hero .lead,
            .hero .back {
                animation: rise .6s ease both
            }

            .hero .lead {
                animation-delay: .08s
            }

            .hero .back {
                animation-delay: .16s
            }

            @keyframes rise {
                from {
                    opacity: 0;
                    transform: translateY(12px)
                }

                to {
                    opacity: 1;
                    transform: none
                }
            }
        }

        /* Footer links */
        .foot-links {
            display: flex;
            flex-wrap: wrap;
            gap: 8px 20px;
            font-size: 14px
        }

        .foot-links a:hover,
        .foot-links a[aria-current="page"] {
            color: var(--ink)
        }
    </style>
</head>

<body>

    <x-header></x-header>

    <main id="top">
        <div class="wrap hero">
            <div>
                <h1>Spotted something wrong? Tell us.</h1>
                <p class="lead">Found a broken link, a wrong fact, or a summary that misses the point? Send us a short
                    report and we will look into it.</p>
                <div class="back">
                    <a class="btn" href="#report">Write a report</a>
                    <a class="btn ghost" href="/">Back to home</a>
                </div>
            </div>
            <aside class="today" aria-label="What you can report">
                <h2>What you can report</h2>
                <div class="item"><b>Wrong or outdated information</b><small>Facts, dates, names, numbers</small></div>
                <div class="item"><b>Broken links or missing pages</b><small>Anything that does not open</small></div>
                <div class="item"><b>Problems with a summary</b><small>Unclear, misleading, or too short</small>
                </div>
            </aside>
        </div>

        <section id="report" class="wrap">
            <div class="head" style="max-width:720px;margin-inline:auto">
                <h2>Send a report</h2>
                <p>It takes about a minute. Only the details box is required.</p>
            </div>

            <form class="report-form" id="reportForm" novalidate>
                <fieldset class="field">
                    <legend>What kind of problem is it?</legend>
                    <div class="opts" role="radiogroup">
                        <input type="radio" name="type" id="t1" value="Wrong information" checked>
                        <label for="t1">Wrong information</label>
                        <input type="radio" name="type" id="t2" value="Broken link">
                        <label for="t2">Broken link</label>
                        <input type="radio" name="type" id="t3" value="Summary problem">
                        <label for="t3">Summary problem</label>
                        <input type="radio" name="type" id="t4" value="Something else">
                        <label for="t4">Something else</label>
                    </div>
                </fieldset>

                <div class="field">
                    <label for="link">Story link <span class="hint">(optional)</span></label>
                    <input type="url" id="link" name="link" placeholder="https://technews.example/story">
                    <p class="error" id="linkErr" aria-live="polite"></p>
                </div>

                <div class="field">
                    <label for="details">Details</label>
                    <textarea id="details" name="details" placeholder="Tell us what is wrong and, if you can, what it should say instead." required></textarea>
                    <p class="error" id="detailsErr" aria-live="polite"></p>
                </div>

                <div class="field">
                    <label for="email">Your email <span class="hint">(optional, only if you want a reply)</span></label>
                    <input type="email" id="email" name="email" placeholder="you@example.com">
                    <p class="error" id="emailErr" aria-live="polite"></p>
                </div>

                <div>
                    <div class="actions">
                        <button class="btn" type="submit">Send report</button>
                        <a class="btn ghost" href="/">Cancel</a>
                    </div>
                    <p class="note" id="formNote" aria-live="polite" style="margin-top:12px"></p>
                </div>
            </form>
        </section>

        <section class="why">
            <div class="wrap cols">
                <div>
                    <h3>We read every report</h3>
                    <p>Each message goes straight to the editors, so nothing gets lost in a pile.</p>
                </div>
                <div>
                    <h3>Fixes are quick</h3>
                    <p>Simple corrections are usually made the same day and the page updates automatically.</p>
                </div>
                <div>
                    <h3>Your email stays private</h3>
                    <p>We only use it to reply about your report. It is never added to the newsletter.</p>
                </div>
            </div>
        </section>
    </main>

    <x-footer></x-footer>

    <script>
        var form = document.getElementById("reportForm"),
            note = document.getElementById("formNote");

        function setError(input, errId, msg) {
            document.getElementById(errId).textContent = msg;
            input.classList.toggle("invalid", !!msg);
            input.setAttribute("aria-invalid", !!msg);
        }

        form.addEventListener("submit", function(e) {
            e.preventDefault();
            var link = form.link.value.trim(),
                details = form.details.value.trim(),
                email = form.email.value.trim(),
                ok = true;

            setError(form.link, "linkErr", "");
            setError(form.details, "detailsErr", "");
            setError(form.email, "emailErr", "");
            note.className = "note";
            note.textContent = "";

            if (link && !/^https?:\/\/\S+\.\S+/.test(link)) {
                setError(form.link, "linkErr", "Enter a full link that starts with http:// or https://.");
                ok = false;
            }
            if (details.length < 10) {
                setError(form.details, "detailsErr", "Please add a few words so we can understand the problem.");
                ok = false;
            }
            if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                setError(form.email, "emailErr", "Enter a valid email address, like you@example.com.");
                ok = false;
            }
            if (!ok) {
                note.className = "note err";
                note.textContent = "Please fix the highlighted fields.";
                var firstBad = form.querySelector(".invalid");
                if (firstBad) firstBad.focus();
                return;
            }

            // Demo only: connect this to your Laravel route (POST /report) with fetch() or a normal form submit.
            note.className = "note ok";
            note.textContent = "Thank you. Your report has been sent.";
            form.reset();
        });

        document.getElementById("yr").textContent = new Date().getFullYear();
    </script>
</body>

</html>
