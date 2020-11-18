module.exports = {
    purge: {
        content: [
            'source/**/*.blade.php',
            'source/**/*.md',
            'source/**/*.html',
        ],
        options: {
            whitelistPatterns: [
                /^bg-[a-z]+-[0-9]+$/,
            ],
        },
    },
    theme: {
        extend: {
            inset: (theme, {negative}) => ({
                '1/2': '50%',
                ...theme('spacing'),
                ...negative(theme('spacing')),
            })
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
