module.exports = {
    prefix: 'tw-',
    important: false,
    separator: ':',
    theme: {
        extend: {},
        customForms: theme => ({
            default: {
                //     input: {
                //         borderRadius: theme('borderRadius.lg'),
                //         backgroundColor: theme('colors.gray.200'),
                //         '&:focus': {
                //             backgroundColor: theme('colors.white'),
                //         }
                //     },
                //     select: {
                //         borderRadius: theme('borderRadius.lg'),
                //         boxShadow: theme('boxShadow.default'),
                //     },
                //     checkbox: {
                //         width: theme('spacing.6'),
                //         height: theme('spacing.6'),
                //     },
            },
        })
    },
    variants: {
        appearance: ['responsive'],
        zIndex: ['responsive'],
    },
    plugins: [
    ],
};
