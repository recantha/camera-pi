

/* This is auto-generated code. Edit at your own peril. */

#include <stdio.h>
#include <string.h>
#include <stdlib.h>

#include "cutest.h"


extern void test_empty(CuTest*);
extern void test_medium(CuTest*);
extern void test_tricky(CuTest*);
extern void test_nasty(CuTest*);
extern void test_very_nasty(CuTest*);
extern void test_collapsing_find_simple(CuTest*);


void RunAllTests(void) 
{
    CuString *output = CuStringNew();
    CuSuite* suite = CuSuiteNew();


    SUITE_ADD_TEST(suite, test_empty);
    SUITE_ADD_TEST(suite, test_medium);
    SUITE_ADD_TEST(suite, test_tricky);
    SUITE_ADD_TEST(suite, test_nasty);
    SUITE_ADD_TEST(suite, test_very_nasty);
    SUITE_ADD_TEST(suite, test_collapsing_find_simple);

    CuSuiteRun(suite);
    CuSuiteSummary(suite, output);
    CuSuiteDetails(suite, output);

    printf("%s\n", output->buffer);

    CuSuiteFree(suite);
    CuStringFree(output);
}

int main(int argc, char** args)
{
    if (argc > 1 && !strcmp(args[1], "-d")) {
        printf("Setting die on fail.\n");
        CuDieOnFail();
    }
    RunAllTests();
    return 0;
}
