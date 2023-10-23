/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: ['class'],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'dark': '#0f172a',
                'dark-secondary': '#1e293b',
                'blue-main': '#35b1e8',
                'secondary': '#505ac1',
                'secondary-hover': '#3f46a8',
            },
            backgroundPosition: {
                'pos-0': '0% 0%',
                'pos-100': '100% 100%',
            },
            backgroundSize: {
                'size-200': '200% 200%',
            },
        },
    },
    plugins: [],
}
