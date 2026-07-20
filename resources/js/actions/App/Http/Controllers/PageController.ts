import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../../wayfinder'
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
 * @see app/Http/Controllers/PageController.php:356
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
 * @see app/Http/Controllers/PageController.php:356
 * @route '/foundation'
 */
foundation.url = (options?: RouteQueryOptions) => {
    return foundation.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\PageController::foundation
 * @see app/Http/Controllers/PageController.php:356
 * @route '/foundation'
 */
foundation.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: foundation.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\PageController::foundation
 * @see app/Http/Controllers/PageController.php:356
 * @route '/foundation'
 */
foundation.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: foundation.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\PageController::foundation
 * @see app/Http/Controllers/PageController.php:356
 * @route '/foundation'
 */
    const foundationForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: foundation.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\PageController::foundation
 * @see app/Http/Controllers/PageController.php:356
 * @route '/foundation'
 */
        foundationForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: foundation.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\PageController::foundation
 * @see app/Http/Controllers/PageController.php:356
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
* @see \App\Http\Controllers\PageController::foundationPartnerSubmit
 * @see app/Http/Controllers/PageController.php:364
 * @route '/foundation/partner'
 */
export const foundationPartnerSubmit = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: foundationPartnerSubmit.url(options),
    method: 'post',
})

foundationPartnerSubmit.definition = {
    methods: ["post"],
    url: '/foundation/partner',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\PageController::foundationPartnerSubmit
 * @see app/Http/Controllers/PageController.php:364
 * @route '/foundation/partner'
 */
foundationPartnerSubmit.url = (options?: RouteQueryOptions) => {
    return foundationPartnerSubmit.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\PageController::foundationPartnerSubmit
 * @see app/Http/Controllers/PageController.php:364
 * @route '/foundation/partner'
 */
foundationPartnerSubmit.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: foundationPartnerSubmit.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\PageController::foundationPartnerSubmit
 * @see app/Http/Controllers/PageController.php:364
 * @route '/foundation/partner'
 */
    const foundationPartnerSubmitForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: foundationPartnerSubmit.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\PageController::foundationPartnerSubmit
 * @see app/Http/Controllers/PageController.php:364
 * @route '/foundation/partner'
 */
        foundationPartnerSubmitForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: foundationPartnerSubmit.url(options),
            method: 'post',
        })
    
    foundationPartnerSubmit.form = foundationPartnerSubmitForm
/**
* @see \App\Http\Controllers\PageController::footprint
 * @see app/Http/Controllers/PageController.php:406
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
 * @see app/Http/Controllers/PageController.php:406
 * @route '/global-footprint'
 */
footprint.url = (options?: RouteQueryOptions) => {
    return footprint.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\PageController::footprint
 * @see app/Http/Controllers/PageController.php:406
 * @route '/global-footprint'
 */
footprint.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: footprint.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\PageController::footprint
 * @see app/Http/Controllers/PageController.php:406
 * @route '/global-footprint'
 */
footprint.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: footprint.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\PageController::footprint
 * @see app/Http/Controllers/PageController.php:406
 * @route '/global-footprint'
 */
    const footprintForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: footprint.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\PageController::footprint
 * @see app/Http/Controllers/PageController.php:406
 * @route '/global-footprint'
 */
        footprintForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: footprint.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\PageController::footprint
 * @see app/Http/Controllers/PageController.php:406
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
 * @see app/Http/Controllers/PageController.php:417
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
 * @see app/Http/Controllers/PageController.php:417
 * @route '/leadership'
 */
leadership.url = (options?: RouteQueryOptions) => {
    return leadership.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\PageController::leadership
 * @see app/Http/Controllers/PageController.php:417
 * @route '/leadership'
 */
leadership.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: leadership.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\PageController::leadership
 * @see app/Http/Controllers/PageController.php:417
 * @route '/leadership'
 */
leadership.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: leadership.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\PageController::leadership
 * @see app/Http/Controllers/PageController.php:417
 * @route '/leadership'
 */
    const leadershipForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: leadership.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\PageController::leadership
 * @see app/Http/Controllers/PageController.php:417
 * @route '/leadership'
 */
        leadershipForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: leadership.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\PageController::leadership
 * @see app/Http/Controllers/PageController.php:417
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
 * @see app/Http/Controllers/PageController.php:424
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
 * @see app/Http/Controllers/PageController.php:424
 * @route '/projects'
 */
projects.url = (options?: RouteQueryOptions) => {
    return projects.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\PageController::projects
 * @see app/Http/Controllers/PageController.php:424
 * @route '/projects'
 */
projects.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: projects.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\PageController::projects
 * @see app/Http/Controllers/PageController.php:424
 * @route '/projects'
 */
projects.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: projects.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\PageController::projects
 * @see app/Http/Controllers/PageController.php:424
 * @route '/projects'
 */
    const projectsForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: projects.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\PageController::projects
 * @see app/Http/Controllers/PageController.php:424
 * @route '/projects'
 */
        projectsForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: projects.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\PageController::projects
 * @see app/Http/Controllers/PageController.php:424
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
 * @see app/Http/Controllers/PageController.php:570
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
 * @see app/Http/Controllers/PageController.php:570
 * @route '/news'
 */
news.url = (options?: RouteQueryOptions) => {
    return news.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\PageController::news
 * @see app/Http/Controllers/PageController.php:570
 * @route '/news'
 */
news.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: news.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\PageController::news
 * @see app/Http/Controllers/PageController.php:570
 * @route '/news'
 */
news.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: news.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\PageController::news
 * @see app/Http/Controllers/PageController.php:570
 * @route '/news'
 */
    const newsForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: news.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\PageController::news
 * @see app/Http/Controllers/PageController.php:570
 * @route '/news'
 */
        newsForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: news.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\PageController::news
 * @see app/Http/Controllers/PageController.php:570
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
* @see \App\Http\Controllers\PageController::newsArticle
 * @see app/Http/Controllers/PageController.php:576
 * @route '/news/{slug}'
 */
export const newsArticle = (args: { slug: string | number } | [slug: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: newsArticle.url(args, options),
    method: 'get',
})

newsArticle.definition = {
    methods: ["get","head"],
    url: '/news/{slug}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\PageController::newsArticle
 * @see app/Http/Controllers/PageController.php:576
 * @route '/news/{slug}'
 */
newsArticle.url = (args: { slug: string | number } | [slug: string | number ] | string | number, options?: RouteQueryOptions) => {
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

    return newsArticle.definition.url
            .replace('{slug}', parsedArgs.slug.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\PageController::newsArticle
 * @see app/Http/Controllers/PageController.php:576
 * @route '/news/{slug}'
 */
newsArticle.get = (args: { slug: string | number } | [slug: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: newsArticle.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\PageController::newsArticle
 * @see app/Http/Controllers/PageController.php:576
 * @route '/news/{slug}'
 */
newsArticle.head = (args: { slug: string | number } | [slug: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: newsArticle.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\PageController::newsArticle
 * @see app/Http/Controllers/PageController.php:576
 * @route '/news/{slug}'
 */
    const newsArticleForm = (args: { slug: string | number } | [slug: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: newsArticle.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\PageController::newsArticle
 * @see app/Http/Controllers/PageController.php:576
 * @route '/news/{slug}'
 */
        newsArticleForm.get = (args: { slug: string | number } | [slug: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: newsArticle.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\PageController::newsArticle
 * @see app/Http/Controllers/PageController.php:576
 * @route '/news/{slug}'
 */
        newsArticleForm.head = (args: { slug: string | number } | [slug: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: newsArticle.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    newsArticle.form = newsArticleForm
/**
* @see \App\Http\Controllers\PageController::contact
 * @see app/Http/Controllers/PageController.php:589
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
 * @see app/Http/Controllers/PageController.php:589
 * @route '/contact'
 */
contact.url = (options?: RouteQueryOptions) => {
    return contact.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\PageController::contact
 * @see app/Http/Controllers/PageController.php:589
 * @route '/contact'
 */
contact.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: contact.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\PageController::contact
 * @see app/Http/Controllers/PageController.php:589
 * @route '/contact'
 */
contact.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: contact.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\PageController::contact
 * @see app/Http/Controllers/PageController.php:589
 * @route '/contact'
 */
    const contactForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: contact.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\PageController::contact
 * @see app/Http/Controllers/PageController.php:589
 * @route '/contact'
 */
        contactForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: contact.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\PageController::contact
 * @see app/Http/Controllers/PageController.php:589
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
/**
* @see \App\Http\Controllers\PageController::contactSubmit
 * @see app/Http/Controllers/PageController.php:595
 * @route '/contact'
 */
export const contactSubmit = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: contactSubmit.url(options),
    method: 'post',
})

contactSubmit.definition = {
    methods: ["post"],
    url: '/contact',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\PageController::contactSubmit
 * @see app/Http/Controllers/PageController.php:595
 * @route '/contact'
 */
contactSubmit.url = (options?: RouteQueryOptions) => {
    return contactSubmit.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\PageController::contactSubmit
 * @see app/Http/Controllers/PageController.php:595
 * @route '/contact'
 */
contactSubmit.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: contactSubmit.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\PageController::contactSubmit
 * @see app/Http/Controllers/PageController.php:595
 * @route '/contact'
 */
    const contactSubmitForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: contactSubmit.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\PageController::contactSubmit
 * @see app/Http/Controllers/PageController.php:595
 * @route '/contact'
 */
        contactSubmitForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: contactSubmit.url(options),
            method: 'post',
        })
    
    contactSubmit.form = contactSubmitForm
const PageController = { home, about, divisions, division, foundation, foundationPartnerSubmit, footprint, leadership, projects, news, newsArticle, contact, contactSubmit }

export default PageController