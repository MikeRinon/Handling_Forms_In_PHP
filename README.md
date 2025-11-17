# Handling Forms in PHP — Example Projects

Collection of small PHP examples that demonstrate basic form handling and sessions using XAMPP (Apache + PHP). The repository contains three compact example projects you can drop into `htdocs` and run locally.

## Table of contents
- Overview
- Prerequisites
- How to run (XAMPP)
- Project structure
- Usage

## Prerequisites
- XAMPP or any local web server with PHP (recommended: XAMPP on Windows).
- A web browser.

## How to run (quick)
1. Put this folder inside your XAMPP `htdocs` directory (for example: `C:\xampp\htdocs\Handling_Forms_In_PHP`).
2. Start Apache from the XAMPP Control Panel.
3. Open the examples in your browser:
   - Act_Order_System: http://localhost/Handling_Forms_In_PHP/Act_Order_System/page1.php
   - DiscriminantVal: http://localhost/Handling_Forms_In_PHP/DiscriminantVal/page1.php
   - Session_Login: http://localhost/Handling_Forms_In_PHP/Session_Login/page1.php

Replace `page1.php` with `page2.php` to see the alternate pages in each example.

## Project structure

`Act_Order_System/`
- `page1.php` — first example page (order or action demonstration).
- `page2.php` — second page for the same example.

`DiscriminantVal/`
- `page1.php` — form that accepts coefficients (a, b, c) and computes the discriminant.
- `page2.php` — result/alternate page.
- `styles.css` — simple styling for the discriminant example.

`Session_Login/`
- `page1.php` — simple login form demonstrating PHP sessions.
- `page2.php` — page shown after login or example of session-protected content.

## Usage notes
- These are educational examples, intentionally minimal for clarity.
- To experiment, edit the `page1.php` or `page2.php` files directly and reload in your browser.
- If you add new files or directories, keep the same relative paths when accessing via `http://localhost/...`.

