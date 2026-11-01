<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Blog – TechNews</title>
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

        nav a[aria-current="page"]:not(.btn) {
            color: var(--ink);
            font-weight: 600
        }

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

        nav .btn {
            padding: 9px 16px
        }

        /* Page title */
        .intro {
            padding: 72px 0 32px
        }

        .intro h1 {
            font-size: clamp(40px, 6vw, 68px);
            font-weight: 800
        }

        .intro p {
            font-size: 19px;
            color: var(--muted);
            max-width: 30em;
            margin: 20px 0 0
        }

        /* Tools: search, topics, sort */
        .tools {
            display: flex;
            flex-direction: column;
            gap: 16px;
            padding: 20px 0 8px
        }

        .tools-row {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between
        }

        .search {
            flex: 1 1 280px;
            max-width: 420px;
            font: 400 16px var(--body);
            padding: 12px 14px;
            border: 1px solid var(--line);
            border-radius: 10px;
            background: var(--bg);
            color: var(--ink)
        }

        .sort {
            font: 500 14px var(--body);
            padding: 11px 12px;
            border: 1px solid var(--line);
            border-radius: 10px;
            background: var(--bg);
            color: var(--ink);
            cursor: pointer
        }

        .chips {
            display: flex;
            gap: 8px;
            flex-wrap: wrap
        }

        .chip {
            font: 500 14px var(--body);
            padding: 8px 16px;
            border-radius: 999px;
            border: 1px solid var(--line);
            background: var(--bg);
            color: var(--muted);
            cursor: pointer
        }

        .chip:hover {
            color: var(--ink)
        }

        .chip[aria-pressed="true"] {
            background: var(--ink);
            border-color: var(--ink);
            color: var(--bg)
        }

        .count {
            font-size: 14px;
            color: var(--muted);
            margin: 0;
            padding: 8px 0 24px
        }

        /* Posts */
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            padding-bottom: 72px
        }

        .post {
            display: flex;
            flex-direction: column;
            border: 1px solid var(--line);
            border-radius: 14px;
            overflow: hidden;
            background: var(--bg)
        }

        .post:hover {
            border-color: var(--accent)
        }

        .post .img {
            display: block;
            width: 100%;
            aspect-ratio: 16/9;
            object-fit: cover;
            background: var(--surface)
        }

        .post .in {
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            flex: 1
        }

        .tag {
            font-size: 13px;
            font-weight: 600;
            color: var(--accent)
        }

        .post h3 {
            font-size: 20px;
            font-weight: 700;
            line-height: 1.25
        }

        .post h3 a:hover {
            color: var(--accent)
        }

        .post p {
            margin: 0;
            font-size: 15px;
            color: var(--muted)
        }

        .meta {
            margin-top: auto;
            padding-top: 6px;
            font-size: 13px;
            color: var(--muted)
        }

        .empty {
            grid-column: 1/-1;
            color: var(--muted);
            padding: 24px 0
        }

        /* Subscribe strip */
        .cta {
            background: var(--surface);
            border-block: 1px solid var(--line);
            padding: 72px 0;
            text-align: center
        }

        .cta h2 {
            font-size: clamp(28px, 4vw, 40px);
            font-weight: 800;
            max-width: 15em;
            margin: 0 auto 14px
        }

        .cta p {
            color: var(--muted);
            margin: 0 auto 26px;
            max-width: 30em
        }

        .sub {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            max-width: 460px;
            margin: 0 auto;
            justify-content: center
        }

        .sub input {
            flex: 1 1 220px;
            min-width: 0;
            font: 400 16px var(--body);
            padding: 12px 14px;
            border: 1px solid var(--line);
            border-radius: 10px;
            background: var(--bg);
            color: var(--ink)
        }

        .note {
            font-size: 14px;
            color: var(--muted);
            margin: 10px 0 0;
            min-height: 1.6em
        }

        .note.ok {
            color: var(--ok)
        }

        .note.err {
            color: #c23a3a
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

        @media (max-width:980px) {
            .grid {
                grid-template-columns: repeat(2, 1fr)
            }
        }

        @media (max-width:860px) {
            nav a:not(.btn) {
                display: none
            }

            nav {
                gap: 10px
            }

            .intro {
                padding-top: 48px
            }
        }

        @media (max-width:620px) {
            .grid {
                grid-template-columns: 1fr
            }

            .search {
                max-width: none
            }
        }

        @media (prefers-reduced-motion:no-preference) {

            .intro h1,
            .intro p {
                animation: rise .6s ease both
            }

            .intro p {
                animation-delay: .08s
            }

            .post {
                animation: rise .4s ease both
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

    <main>
        <div class="wrap intro">
            <h1>All tech news and stories.</h1>
            <p>Browse every story we have published. Search by keyword or pick a topic.</p>
        </div>

        <div class="wrap">
            <div class="tools">
                <div class="tools-row">
                    <input class="search" id="search" type="search" placeholder="Search stories" aria-label="Search stories">
                    <select class="sort" id="sort" aria-label="Sort stories">
                        <option value="new">Newest first</option>
                        <option value="old">Oldest first</option>
                    </select>
                </div>
                <div class="chips" role="group" aria-label="Filter by topic" id="chips"></div>
            </div>
            <p class="count" id="count" aria-live="polite"></p>
            <div class="grid" id="grid"></div>
        </div>

        <section id="subscribe" class="cta">
            <div class="wrap">
                <h2>Never miss a story</h2>
                <p>Get the best of the day in one short email every morning.</p>
                <form class="sub" id="subForm" novalidate>
                    <input type="email" name="email" placeholder="you@example.com" aria-label="Email address" required>
                    <button class="btn" type="submit">Subscribe</button>
                </form>
                <p class="note" id="subNote" aria-live="polite"></p>
            </div>
        </section>
    </main>

    <x-footer></x-footer>

    <script>
        // Sample posts. Replace with your own data or load them from your backend.
        //   t = topic, h = title, p = description, d = date (YYYY-MM-DD), m = read time,
        //   img = image path (leave "" to use a generated placeholder), u = link to the full story
        var POSTS = [{
                t: "AI",
                h: "Open-source models are catching up fast",
                p: "Free models now handle many tasks that needed paid tools a year ago.",
                d: "2026-10-30",
                m: "4 min read",
                img: "",
                u: "#",
                c: "#2347ff"
            },
            {
                t: "Web",
                h: "Browsers get smarter about tracking",
                p: "New built-in controls make it easier to keep your browsing private.",
                d: "2026-10-28",
                m: "3 min read",
                img: "",
                u: "#",
                c: "#0a7a4b"
            },
            {
                t: "Security",
                h: "Password managers explained simply",
                p: "What they do, why they are safer, and how to switch in ten minutes.",
                d: "2026-10-26",
                m: "5 min read",
                img: "",
                u: "#",
                c: "#d9482b"
            },
            {
                t: "Gadgets",
                h: "Choosing a laptop for coding in 2026",
                p: "RAM, battery life, and screen: the three specs that matter most.",
                d: "2026-10-22",
                m: "6 min read",
                img: "",
                u: "#",
                c: "#c28a00"
            },
            {
                t: "AI",
                h: "How to use AI tools without losing your skills",
                p: "Practical habits for students and developers who use AI every day.",
                d: "2026-10-19",
                m: "4 min read",
                img: "",
                u: "#",
                c: "#6a3de8"
            },
            {
                t: "Web",
                h: "Why fast websites win more readers",
                p: "A few small changes to images and fonts can cut load time in half.",
                d: "2026-10-15",
                m: "3 min read",
                img: "",
                u: "#",
                c: "#0b7f9c"
            },
            {
                t: "Security",
                h: "Two-factor login: which method should you pick?",
                p: "Text codes, authenticator apps, and security keys compared in plain language.",
                d: "2026-10-11",
                m: "5 min read",
                img: "",
                u: "#",
                c: "#b3234a"
            },
            {
                t: "Gadgets",
                h: "Phone batteries: what actually makes them last longer",
                p: "Charging habits that help, and the popular tips that make no difference.",
                d: "2026-10-06",
                m: "4 min read",
                img: "",
                u: "#",
                c: "#3a7d1e"
            },
            {
                t: "AI",
                h: "A beginner’s guide to prompts that work",
                p: "Clear, specific requests get better answers. Here are five simple patterns.",
                d: "2026-09-30",
                m: "6 min read",
                img: "",
                u: "#",
                c: "#8a4fd6"
            }
        ];
        var TOPICS = ["All", "AI", "Web", "Security", "Gadgets"];

        var grid = document.getElementById("grid"),
            chips = document.getElementById("chips"),
            count = document.getElementById("count"),
            search = document.getElementById("search"),
            sort = document.getElementById("sort"),
            topic = "All";

        function esc(s) {
            return String(s).replace(/[&<>"']/g, function(c) {
                return {
                    "&": "&amp;",
                    "<": "&lt;",
                    ">": "&gt;",
                    '"': "&quot;",
                    "'": "&#39;"
                } [c];
            });
        }

        // Simple generated cover image, used when a post has no image path.
        function placeholder(color, n) {
            var s = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 360">' +
                '<rect width="640" height="360" fill="' + color + '" fill-opacity=".14"/>' +
                '<circle cx="' + (120 + n * 40) + '" cy="110" r="90" fill="' + color + '" fill-opacity=".35"/>' +
                '<circle cx="' + (520 - n * 25) + '" cy="270" r="120" fill="' + color + '" fill-opacity=".25"/>' +
                '<rect x="' + (220 + n * 12) + '" y="150" width="200" height="120" rx="18" fill="' + color + '" fill-opacity=".55"/>' +
                '</svg>';
            return "data:image/svg+xml;utf8," + encodeURIComponent(s);
        }

        function fmt(d) {
            var dt = new Date(d + "T00:00:00");
            return dt.toLocaleDateString("en-US", {
                year: "numeric",
                month: "short",
                day: "numeric"
            });
        }

        function render() {
            var q = search.value.trim().toLowerCase();
            var list = POSTS.map(function(p, i) {
                p.i = i;
                return p;
            }).filter(function(p) {
                var inTopic = topic === "All" || p.t === topic;
                var inText = !q || (p.h + " " + p.p + " " + p.t).toLowerCase().indexOf(q) !== -1;
                return inTopic && inText;
            }).sort(function(a, b) {
                return sort.value === "new" ? (a.d < b.d ? 1 : -1) : (a.d > b.d ? 1 : -1);
            });

            count.textContent = list.length + (list.length === 1 ? " story" : " stories");
            grid.innerHTML = list.length ? list.map(function(p) {
                var src = p.img || placeholder(p.c, p.i % 5);
                return '<article class="post">' +
                    '<a href="' + esc(p.u) + '" tabindex="-1" aria-hidden="true"><img class="img" src="' + src +
                    '" alt="" loading="lazy"></a>' +
                    '<div class="in"><span class="tag">' + esc(p.t) + '</span>' +
                    '<h3><a href="' + esc(p.u) + '">' + esc(p.h) + '</a></h3>' +
                    '<p>' + esc(p.p) + '</p>' +
                    '<span class="meta"><time datetime="' + p.d + '">' + fmt(p.d) + '</time> · ' + esc(p.m) +
                    '</span></div></article>';
            }).join("") : '<p class="empty">No stories match your search. Try another word or topic.</p>';
        }

        TOPICS.forEach(function(t, i) {
            var b = document.createElement("button");
            b.className = "chip";
            b.type = "button";
            b.textContent = t;
            b.setAttribute("aria-pressed", i === 0);
            b.addEventListener("click", function() {
                topic = t;
                chips.querySelectorAll(".chip").forEach(function(c) {
                    c.setAttribute("aria-pressed", c === b);
                });
                render();
            });
            chips.appendChild(b);
        });
        search.addEventListener("input", render);
        sort.addEventListener("change", render);
        render();

        // Subscribe form: simple email check (connect to your mail service later)
        document.getElementById("subForm").addEventListener("submit", function(e) {
            e.preventDefault();
            var f = e.target,
                note = document.getElementById("subNote"),
                v = f.email.value.trim();
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v)) {
                note.className = "note err";
                note.textContent = "Enter a valid email address, like you@example.com.";
                return;
            }
            note.className = "note ok";
            note.textContent = "You’re subscribed. Check your inbox tomorrow morning.";
            f.reset();
        });
        document.getElementById("yr").textContent = new Date().getFullYear();
    </script>
</body>

</html>
