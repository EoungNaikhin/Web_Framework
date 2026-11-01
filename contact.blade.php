<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Contact – TechNews</title>
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
                <h1>Say hello. We read every message.</h1>
                <p class="lead">Questions about a story, an idea for us, or feedback on the site? Send a short message
                    and we will reply by email.</p>
                <div class="back">
                    <a class="btn" href="#contact">Write a message</a>
                    <a class="btn ghost" href="/">Back to home</a>
                </div>
            </div>
            <aside class="today" aria-label="What to write about">
                <h2>What you can write about</h2>
                <div class="item"><b>Questions about a story</b><small>How we summarised it, or where it came from</small></div>
                <div class="item"><b>Story tips and ideas</b><small>Something we should be covering</small></div>
                <div class="item"><b>Feedback on the site</b><small>What works and what could be better</small></div>
            </aside>
        </div>

        <section id="contact" class="wrap">
            <div class="head" style="max-width:720px;margin-inline:auto">
                <h2>Send a message</h2>
                <p>It takes about a minute. Found a mistake in a story? Please use the <a href="/report"
                        style="color:var(--accent);font-weight:600">report page</a> instead.</p>
            </div>

            <form class="report-form" id="contactForm" novalidate>
                <fieldset class="field">
                    <legend>What is it about?</legend>
                    <div class="opts" role="radiogroup">
                        <input type="radio" name="topic" id="c1" value="Question" checked>
                        <label for="c1">Question</label>
                        <input type="radio" name="topic" id="c2" value="Story tip">
                        <label for="c2">Story tip</label>
                        <input type="radio" name="topic" id="c3" value="Feedback">
                        <label for="c3">Feedback</label>
                        <input type="radio" name="topic" id="c4" value="Something else">
                        <label for="c4">Something else</label>
                    </div>
                </fieldset>

                <div class="field">
                    <label for="name">Your name</label>
                    <input type="text" id="name" name="name" placeholder="Your name" autocomplete="name" required>
                    <p class="error" id="nameErr" aria-live="polite"></p>
                </div>

                <div class="field">
                    <label for="email">Your email</label>
                    <input type="email" id="email" name="email" placeholder="you@example.com" autocomplete="email" required>
                    <p class="error" id="emailErr" aria-live="polite"></p>
                </div>

                <div class="field">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="How can we help?" required></textarea>
                    <p class="error" id="messageErr" aria-live="polite"></p>
                </div>

                <div>
                    <div class="actions">
                        <button class="btn" type="submit">Send message</button>
                        <a class="btn ghost" href="/">Cancel</a>
                    </div>
                    <p class="note" id="formNote" aria-live="polite" style="margin-top:12px"></p>
                </div>
            </form>
        </section>

        <section class="why">
            <div class="wrap cols">
                <div>
                    <h3>A real person replies</h3>
                    <p>Messages go straight to the team, so you get an answer from someone who read yours.</p>
                </div>
                <div>
                    <h3>Tips are welcome</h3>
                    <p>If you spot a story we missed, tell us. Good tips often become the next summary.</p>
                </div>
                <div>
                    <h3>Your email stays private</h3>
                    <p>We only use it to reply to you. It is never added to the newsletter.</p>
                </div>
            </div>
        </section>
    </main>

    <x-footer></x-footer>

    <script>
        var form = document.getElementById("contactForm"),
            note = document.getElementById("formNote");

        function setError(input, errId, msg) {
            document.getElementById(errId).textContent = msg;
            input.classList.toggle("invalid", !!msg);
            input.setAttribute("aria-invalid", !!msg);
        }

        form.addEventListener("submit", function(e) {
            e.preventDefault();
            var name = form.name.value.trim(),
                email = form.email.value.trim(),
                message = form.message.value.trim(),
                ok = true;

            setError(form.name, "nameErr", "");
            setError(form.email, "emailErr", "");
            setError(form.message, "messageErr", "");
            note.className = "note";
            note.textContent = "";

            if (name.length < 2) {
                setError(form.name, "nameErr", "Please enter your name.");
                ok = false;
            }
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                setError(form.email, "emailErr", "Enter a valid email address, like you@example.com.");
                ok = false;
            }
            if (message.length < 10) {
                setError(form.message, "messageErr", "Please write a few words so we know how to help.");
                ok = false;
            }
            if (!ok) {
                note.className = "note err";
                note.textContent = "Please fix the highlighted fields.";
                var firstBad = form.querySelector(".invalid");
                if (firstBad) firstBad.focus();
                return;
            }

            // Demo only: connect this to your Laravel route (POST /contact) with fetch() or a normal form submit.
            note.className = "note ok";
            note.textContent = "Thank you. Your message has been sent.";
            form.reset();
        });

        document.getElementById("yr").textContent = new Date().getFullYear();
    </script>
</body>

</html>
