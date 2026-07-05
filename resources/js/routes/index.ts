import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../wayfinder'
/**
* @see \Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::login
 * @see vendor/laravel/fortify/src/Http/Controllers/AuthenticatedSessionController.php:47
 * @route '/login'
 */
export const login = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: login.url(options),
    method: 'get',
})

login.definition = {
    methods: ["get","head"],
    url: '/login',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::login
 * @see vendor/laravel/fortify/src/Http/Controllers/AuthenticatedSessionController.php:47
 * @route '/login'
 */
login.url = (options?: RouteQueryOptions) => {
    return login.definition.url + queryParams(options)
}

/**
* @see \Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::login
 * @see vendor/laravel/fortify/src/Http/Controllers/AuthenticatedSessionController.php:47
 * @route '/login'
 */
login.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: login.url(options),
    method: 'get',
})
/**
* @see \Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::login
 * @see vendor/laravel/fortify/src/Http/Controllers/AuthenticatedSessionController.php:47
 * @route '/login'
 */
login.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: login.url(options),
    method: 'head',
})

    /**
* @see \Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::login
 * @see vendor/laravel/fortify/src/Http/Controllers/AuthenticatedSessionController.php:47
 * @route '/login'
 */
    const loginForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: login.url(options),
        method: 'get',
    })

            /**
* @see \Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::login
 * @see vendor/laravel/fortify/src/Http/Controllers/AuthenticatedSessionController.php:47
 * @route '/login'
 */
        loginForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: login.url(options),
            method: 'get',
        })
            /**
* @see \Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::login
 * @see vendor/laravel/fortify/src/Http/Controllers/AuthenticatedSessionController.php:47
 * @route '/login'
 */
        loginForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: login.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    login.form = loginForm
/**
* @see \Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::logout
 * @see vendor/laravel/fortify/src/Http/Controllers/AuthenticatedSessionController.php:100
 * @route '/logout'
 */
export const logout = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: logout.url(options),
    method: 'post',
})

logout.definition = {
    methods: ["post"],
    url: '/logout',
} satisfies RouteDefinition<["post"]>

/**
* @see \Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::logout
 * @see vendor/laravel/fortify/src/Http/Controllers/AuthenticatedSessionController.php:100
 * @route '/logout'
 */
logout.url = (options?: RouteQueryOptions) => {
    return logout.definition.url + queryParams(options)
}

/**
* @see \Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::logout
 * @see vendor/laravel/fortify/src/Http/Controllers/AuthenticatedSessionController.php:100
 * @route '/logout'
 */
logout.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: logout.url(options),
    method: 'post',
})

    /**
* @see \Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::logout
 * @see vendor/laravel/fortify/src/Http/Controllers/AuthenticatedSessionController.php:100
 * @route '/logout'
 */
    const logoutForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: logout.url(options),
        method: 'post',
    })

            /**
* @see \Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::logout
 * @see vendor/laravel/fortify/src/Http/Controllers/AuthenticatedSessionController.php:100
 * @route '/logout'
 */
        logoutForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: logout.url(options),
            method: 'post',
        })
    
    logout.form = logoutForm
/**
* @see \Laravel\Fortify\Http\Controllers\RegisteredUserController::register
 * @see vendor/laravel/fortify/src/Http/Controllers/RegisteredUserController.php:41
 * @route '/register'
 */
export const register = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: register.url(options),
    method: 'get',
})

register.definition = {
    methods: ["get","head"],
    url: '/register',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \Laravel\Fortify\Http\Controllers\RegisteredUserController::register
 * @see vendor/laravel/fortify/src/Http/Controllers/RegisteredUserController.php:41
 * @route '/register'
 */
register.url = (options?: RouteQueryOptions) => {
    return register.definition.url + queryParams(options)
}

/**
* @see \Laravel\Fortify\Http\Controllers\RegisteredUserController::register
 * @see vendor/laravel/fortify/src/Http/Controllers/RegisteredUserController.php:41
 * @route '/register'
 */
register.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: register.url(options),
    method: 'get',
})
/**
* @see \Laravel\Fortify\Http\Controllers\RegisteredUserController::register
 * @see vendor/laravel/fortify/src/Http/Controllers/RegisteredUserController.php:41
 * @route '/register'
 */
register.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: register.url(options),
    method: 'head',
})

    /**
* @see \Laravel\Fortify\Http\Controllers\RegisteredUserController::register
 * @see vendor/laravel/fortify/src/Http/Controllers/RegisteredUserController.php:41
 * @route '/register'
 */
    const registerForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: register.url(options),
        method: 'get',
    })

            /**
* @see \Laravel\Fortify\Http\Controllers\RegisteredUserController::register
 * @see vendor/laravel/fortify/src/Http/Controllers/RegisteredUserController.php:41
 * @route '/register'
 */
        registerForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: register.url(options),
            method: 'get',
        })
            /**
* @see \Laravel\Fortify\Http\Controllers\RegisteredUserController::register
 * @see vendor/laravel/fortify/src/Http/Controllers/RegisteredUserController.php:41
 * @route '/register'
 */
        registerForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: register.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    register.form = registerForm
/**
* @see \App\Http\Controllers\PageController::home
 * @see app/Http/Controllers/PageController.php:306
 * @route '/'
 */
export const home = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: home.url(options),
    method: 'get',
})

home.definition = {
    methods: ["get","head"],
    url: '/',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\PageController::home
 * @see app/Http/Controllers/PageController.php:306
 * @route '/'
 */
home.url = (options?: RouteQueryOptions) => {
    return home.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\PageController::home
 * @see app/Http/Controllers/PageController.php:306
 * @route '/'
 */
home.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: home.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\PageController::home
 * @see app/Http/Controllers/PageController.php:306
 * @route '/'
 */
home.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: home.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\PageController::home
 * @see app/Http/Controllers/PageController.php:306
 * @route '/'
 */
    const homeForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: home.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\PageController::home
 * @see app/Http/Controllers/PageController.php:306
 * @route '/'
 */
        homeForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: home.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\PageController::home
 * @see app/Http/Controllers/PageController.php:306
 * @route '/'
 */
        homeForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: home.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    home.form = homeForm
/**
* @see \App\Http\Controllers\PageController::about
 * @see app/Http/Controllers/PageController.php:314
 * @route '/about'
 */
export const about = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: about.url(options),
    method: 'get',
})

about.definition = {
    methods: ["get","head"],
    url: '/about',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\PageController::about
 * @see app/Http/Controllers/PageController.php:314
 * @route '/about'
 */
about.url = (options?: RouteQueryOptions) => {
    return about.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\PageController::about
 * @see app/Http/Controllers/PageController.php:314
 * @route '/about'
 */
about.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: about.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\PageController::about
 * @see app/Http/Controllers/PageController.php:314
 * @route '/about'
 */
about.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: about.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\PageController::about
 * @see app/Http/Controllers/PageController.php:314
 * @route '/about'
 */
    const aboutForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: about.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\PageController::about
 * @see app/Http/Controllers/PageController.php:314
 * @route '/about'
 */
        aboutForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: about.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\PageController::about
 * @see app/Http/Controllers/PageController.php:314
 * @route '/about'
 */
        aboutForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: about.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    about.form = aboutForm
/**
* @see \App\Http\Controllers\PageController::divisions
 * @see app/Http/Controllers/PageController.php:322
 * @route '/divisions'
 */
export const divisions = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: divisions.url(options),
    method: 'get',
})

divisions.definition = {
    methods: ["get","head"],
    url: '/divisions',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\PageController::divisions
 * @see app/Http/Controllers/PageController.php:322
 * @route '/divisions'
 */
divisions.url = (options?: RouteQueryOptions) => {
    return divisions.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\PageController::divisions
 * @see app/Http/Controllers/PageController.php:322
 * @route '/divisions'
 */
divisions.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: divisions.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\PageController::divisions
 * @see app/Http/Controllers/PageController.php:322
 * @route '/divisions'
 */
divisions.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: divisions.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\PageController::divisions
 * @see app/Http/Controllers/PageController.php:322
 * @route '/divisions'
 */
    const divisionsForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: divisions.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\PageController::divisions
 * @see app/Http/Controllers/PageController.php:322
 * @route '/divisions'
 */
        divisionsForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: divisions.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\PageController::divisions
 * @see app/Http/Controllers/PageController.php:322
 * @route '/divisions'
 */
        divisionsForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: divisions.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    divisions.form = divisionsForm
/**
* @see \App\Http\Controllers\PageController::division
 * @see app/Http/Controllers/PageController.php:328
 * @route '/divisions/{slug}'
 */
export const division = (args: { slug: string | number } | [slug: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: division.url(args, options),
    method: 'get',
})

division.definition = {
    methods: ["get","head"],
    url: '/divisions/{slug}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\PageController::division
 * @see app/Http/Controllers/PageController.php:328
 * @route '/divisions/{slug}'
 */
division.url = (args: { slug: string | number } | [slug: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { slug: args }
    }

    
    if (Array.isArray(args)) {
        args = {
                    slug: args[0],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        slug: args.slug,
                }

    return division.definition.url
            .replace('{slug}', parsedArgs.slug.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\PageController::division
 * @see app/Http/Controllers/PageController.php:328
 * @route '/divisions/{slug}'
 */
division.get = (args: { slug: string | number } | [slug: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: division.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\PageController::division
 * @see app/Http/Controllers/PageController.php:328
 * @route '/divisions/{slug}'
 */
division.head = (args: { slug: string | number } | [slug: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: division.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\PageController::division
 * @see app/Http/Controllers/PageController.php:328
 * @route '/divisions/{slug}'
 */
    const divisionForm = (args: { slug: string | number } | [slug: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: division.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\PageController::division
 * @see app/Http/Controllers/PageController.php:328
 * @route '/divisions/{slug}'
 */
        divisionForm.get = (args: { slug: string | number } | [slug: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: division.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\PageController::division
 * @see app/Http/Controllers/PageController.php:328
 * @route '/divisions/{slug}'
 */
        divisionForm.head = (args: { slug: string | number } | [slug: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: division.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    division.form = divisionForm
/**
* @see \App\Http\Controllers\PageController::foundation
 * @see app/Http/Controllers/PageController.php:342
 * @route '/foundation'
 */
export const foundation = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: foundation.url(options),
    method: 'get',
})

foundation.definition = {
    methods: ["get","head"],
    url: '/foundation',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\PageController::foundation
 * @see app/Http/Controllers/PageController.php:342
 * @route '/foundation'
 */
foundation.url = (options?: RouteQueryOptions) => {
    return foundation.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\PageController::foundation
 * @see app/Http/Controllers/PageController.php:342
 * @route '/foundation'
 */
foundation.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: foundation.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\PageController::foundation
 * @see app/Http/Controllers/PageController.php:342
 * @route '/foundation'
 */
foundation.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: foundation.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\PageController::foundation
 * @see app/Http/Controllers/PageController.php:342
 * @route '/foundation'
 */
    const foundationForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: foundation.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\PageController::foundation
 * @see app/Http/Controllers/PageController.php:342
 * @route '/foundation'
 */
        foundationForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: foundation.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\PageController::foundation
 * @see app/Http/Controllers/PageController.php:342
 * @route '/foundation'
 */
        foundationForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: foundation.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    foundation.form = foundationForm
/**
* @see \App\Http\Controllers\PageController::footprint
 * @see app/Http/Controllers/PageController.php:392
 * @route '/global-footprint'
 */
export const footprint = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: footprint.url(options),
    method: 'get',
})

footprint.definition = {
    methods: ["get","head"],
    url: '/global-footprint',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\PageController::footprint
 * @see app/Http/Controllers/PageController.php:392
 * @route '/global-footprint'
 */
footprint.url = (options?: RouteQueryOptions) => {
    return footprint.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\PageController::footprint
 * @see app/Http/Controllers/PageController.php:392
 * @route '/global-footprint'
 */
footprint.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: footprint.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\PageController::footprint
 * @see app/Http/Controllers/PageController.php:392
 * @route '/global-footprint'
 */
footprint.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: footprint.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\PageController::footprint
 * @see app/Http/Controllers/PageController.php:392
 * @route '/global-footprint'
 */
    const footprintForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: footprint.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\PageController::footprint
 * @see app/Http/Controllers/PageController.php:392
 * @route '/global-footprint'
 */
        footprintForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: footprint.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\PageController::footprint
 * @see app/Http/Controllers/PageController.php:392
 * @route '/global-footprint'
 */
        footprintForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: footprint.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    footprint.form = footprintForm
/**
* @see \App\Http\Controllers\PageController::leadership
 * @see app/Http/Controllers/PageController.php:403
 * @route '/leadership'
 */
export const leadership = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: leadership.url(options),
    method: 'get',
})

leadership.definition = {
    methods: ["get","head"],
    url: '/leadership',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\PageController::leadership
 * @see app/Http/Controllers/PageController.php:403
 * @route '/leadership'
 */
leadership.url = (options?: RouteQueryOptions) => {
    return leadership.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\PageController::leadership
 * @see app/Http/Controllers/PageController.php:403
 * @route '/leadership'
 */
leadership.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: leadership.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\PageController::leadership
 * @see app/Http/Controllers/PageController.php:403
 * @route '/leadership'
 */
leadership.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: leadership.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\PageController::leadership
 * @see app/Http/Controllers/PageController.php:403
 * @route '/leadership'
 */
    const leadershipForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: leadership.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\PageController::leadership
 * @see app/Http/Controllers/PageController.php:403
 * @route '/leadership'
 */
        leadershipForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: leadership.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\PageController::leadership
 * @see app/Http/Controllers/PageController.php:403
 * @route '/leadership'
 */
        leadershipForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: leadership.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    leadership.form = leadershipForm
/**
* @see \App\Http\Controllers\PageController::projects
 * @see app/Http/Controllers/PageController.php:410
 * @route '/projects'
 */
export const projects = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: projects.url(options),
    method: 'get',
})

projects.definition = {
    methods: ["get","head"],
    url: '/projects',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\PageController::projects
 * @see app/Http/Controllers/PageController.php:410
 * @route '/projects'
 */
projects.url = (options?: RouteQueryOptions) => {
    return projects.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\PageController::projects
 * @see app/Http/Controllers/PageController.php:410
 * @route '/projects'
 */
projects.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: projects.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\PageController::projects
 * @see app/Http/Controllers/PageController.php:410
 * @route '/projects'
 */
projects.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: projects.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\PageController::projects
 * @see app/Http/Controllers/PageController.php:410
 * @route '/projects'
 */
    const projectsForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: projects.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\PageController::projects
 * @see app/Http/Controllers/PageController.php:410
 * @route '/projects'
 */
        projectsForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: projects.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\PageController::projects
 * @see app/Http/Controllers/PageController.php:410
 * @route '/projects'
 */
        projectsForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: projects.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    projects.form = projectsForm
/**
* @see \App\Http\Controllers\PageController::news
 * @see app/Http/Controllers/PageController.php:541
 * @route '/news'
 */
export const news = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: news.url(options),
    method: 'get',
})

news.definition = {
    methods: ["get","head"],
    url: '/news',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\PageController::news
 * @see app/Http/Controllers/PageController.php:541
 * @route '/news'
 */
news.url = (options?: RouteQueryOptions) => {
    return news.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\PageController::news
 * @see app/Http/Controllers/PageController.php:541
 * @route '/news'
 */
news.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: news.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\PageController::news
 * @see app/Http/Controllers/PageController.php:541
 * @route '/news'
 */
news.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: news.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\PageController::news
 * @see app/Http/Controllers/PageController.php:541
 * @route '/news'
 */
    const newsForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: news.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\PageController::news
 * @see app/Http/Controllers/PageController.php:541
 * @route '/news'
 */
        newsForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: news.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\PageController::news
 * @see app/Http/Controllers/PageController.php:541
 * @route '/news'
 */
        newsForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: news.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    news.form = newsForm
/**
* @see \App\Http\Controllers\PageController::contact
 * @see app/Http/Controllers/PageController.php:560
 * @route '/contact'
 */
export const contact = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: contact.url(options),
    method: 'get',
})

contact.definition = {
    methods: ["get","head"],
    url: '/contact',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\PageController::contact
 * @see app/Http/Controllers/PageController.php:560
 * @route '/contact'
 */
contact.url = (options?: RouteQueryOptions) => {
    return contact.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\PageController::contact
 * @see app/Http/Controllers/PageController.php:560
 * @route '/contact'
 */
contact.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: contact.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\PageController::contact
 * @see app/Http/Controllers/PageController.php:560
 * @route '/contact'
 */
contact.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: contact.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\PageController::contact
 * @see app/Http/Controllers/PageController.php:560
 * @route '/contact'
 */
    const contactForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: contact.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\PageController::contact
 * @see app/Http/Controllers/PageController.php:560
 * @route '/contact'
 */
        contactForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: contact.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\PageController::contact
 * @see app/Http/Controllers/PageController.php:560
 * @route '/contact'
 */
        contactForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: contact.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    contact.form = contactForm