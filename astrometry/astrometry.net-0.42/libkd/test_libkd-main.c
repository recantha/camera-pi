

/* This is auto-generated code. Edit at your own peril. */

#include <stdio.h>
#include <string.h>
#include <stdlib.h>

#include "cutest.h"


extern void test_splitbits(CuTest*);
extern void test_short_partition(CuTest*);
extern void test_empty_node(CuTest*);
extern void test_2(CuTest*);
extern void test_nlevels(CuTest*);
extern void test_rs_bb_duu(CuTest*);
extern void test_rs_bb_ddd_small(CuTest*);
extern void test_rs_bb_ddd(CuTest*);
extern void test_rs_split_ddd(CuTest*);
extern void test_rs_both_ddd(CuTest*);
extern void test_rs_split_duu(CuTest*);
extern void test_rs_bb_dss(CuTest*);
extern void test_rs_split_dss(CuTest*);
extern void test_nn_bb_ddd(CuTest*);
extern void test_nn_split_ddd(CuTest*);
extern void test_nn_both_ddd(CuTest*);
extern void test_nn_split_duu(CuTest*);
extern void test_nn_bb_duu(CuTest*);
extern void test_nn_split_dss(CuTest*);
extern void test_nn_split_dssB(CuTest*);
extern void test_nn_bb_dss(CuTest*);
extern void test_nn_bb_dssB(CuTest*);
extern void test_nn_split_ddd_linearlr(CuTest*);
extern void test_nn_split_duu_linearlr(CuTest*);
extern void test_nn_split_dss_linearlr(CuTest*);
extern void test_lr_ddd(CuTest*);
extern void test_no_lr_with_ints(CuTest*);


void RunAllTests(void) 
{
    CuString *output = CuStringNew();
    CuSuite* suite = CuSuiteNew();


    SUITE_ADD_TEST(suite, test_splitbits);
    SUITE_ADD_TEST(suite, test_short_partition);
    SUITE_ADD_TEST(suite, test_empty_node);
    SUITE_ADD_TEST(suite, test_2);
    SUITE_ADD_TEST(suite, test_nlevels);
    SUITE_ADD_TEST(suite, test_rs_bb_duu);
    SUITE_ADD_TEST(suite, test_rs_bb_ddd_small);
    SUITE_ADD_TEST(suite, test_rs_bb_ddd);
    SUITE_ADD_TEST(suite, test_rs_split_ddd);
    SUITE_ADD_TEST(suite, test_rs_both_ddd);
    SUITE_ADD_TEST(suite, test_rs_split_duu);
    SUITE_ADD_TEST(suite, test_rs_bb_dss);
    SUITE_ADD_TEST(suite, test_rs_split_dss);
    SUITE_ADD_TEST(suite, test_nn_bb_ddd);
    SUITE_ADD_TEST(suite, test_nn_split_ddd);
    SUITE_ADD_TEST(suite, test_nn_both_ddd);
    SUITE_ADD_TEST(suite, test_nn_split_duu);
    SUITE_ADD_TEST(suite, test_nn_bb_duu);
    SUITE_ADD_TEST(suite, test_nn_split_dss);
    SUITE_ADD_TEST(suite, test_nn_split_dssB);
    SUITE_ADD_TEST(suite, test_nn_bb_dss);
    SUITE_ADD_TEST(suite, test_nn_bb_dssB);
    SUITE_ADD_TEST(suite, test_nn_split_ddd_linearlr);
    SUITE_ADD_TEST(suite, test_nn_split_duu_linearlr);
    SUITE_ADD_TEST(suite, test_nn_split_dss_linearlr);
    SUITE_ADD_TEST(suite, test_lr_ddd);
    SUITE_ADD_TEST(suite, test_no_lr_with_ints);

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
