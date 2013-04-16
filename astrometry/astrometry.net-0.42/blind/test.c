

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
extern void test_simple_median(CuTest*);
extern void test_dsmooth_vs_dsmooth2(CuTest*);
extern void test_dsmooth2_inplace(CuTest*);
extern void test_read_2mass(CuTest*);
extern void test_fits_empty(CuTest*);
extern void test_read_usnob(CuTest*);
extern void test_read_nomad(CuTest*);
extern void test_read_matchfile(CuTest*);
extern void test_depths(CuTest*);
extern void test_dcen3x3_1(CuTest*);
extern void test_dcen3x3_2(CuTest*);
extern void test_dcen3x3_3(CuTest*);
extern void test_sorting(CuTest*);
extern void test_simplexy_1(CuTest*);
extern void test_tweak_1(CuTest*);
extern void test_tweak_2(CuTest*);
extern void test_tchebytweak(CuTest*);
extern void test_solve_multiindex(CuTest*);


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
    SUITE_ADD_TEST(suite, test_simple_median);
    SUITE_ADD_TEST(suite, test_dsmooth_vs_dsmooth2);
    SUITE_ADD_TEST(suite, test_dsmooth2_inplace);
    SUITE_ADD_TEST(suite, test_read_2mass);
    SUITE_ADD_TEST(suite, test_fits_empty);
    SUITE_ADD_TEST(suite, test_read_usnob);
    SUITE_ADD_TEST(suite, test_read_nomad);
    SUITE_ADD_TEST(suite, test_read_matchfile);
    SUITE_ADD_TEST(suite, test_depths);
    SUITE_ADD_TEST(suite, test_dcen3x3_1);
    SUITE_ADD_TEST(suite, test_dcen3x3_2);
    SUITE_ADD_TEST(suite, test_dcen3x3_3);
    SUITE_ADD_TEST(suite, test_sorting);
    SUITE_ADD_TEST(suite, test_simplexy_1);
    SUITE_ADD_TEST(suite, test_tweak_1);
    SUITE_ADD_TEST(suite, test_tweak_2);
    SUITE_ADD_TEST(suite, test_tchebytweak);
    SUITE_ADD_TEST(suite, test_solve_multiindex);

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
